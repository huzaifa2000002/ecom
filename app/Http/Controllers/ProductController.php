<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
// use Auth;
class ProductController extends Controller
{
    //
    function index(){
        // return Product::all();
        $data= Product::all();

        return view('product',['products'=>$data]);
        // return view('product',compact('data'));


    }
    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){

            // return "atc";
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }
        else{
            return redirect('/login');
        }

    }
    static function cartItem(){
        // dd(Session::get('user')['id']);
        $userId=Session::get('user')['id'];

        return Cart::where('user_id',$userId)->count();
    }
    function cartList(){
    $userId=Session::get('user')['id'];
    $products=DB::table('cart')
    ->join('products','cart.product_id','=','products.id' )
    ->where('cart.user_id',$userId)
    ->select('products.*','cart.id as cart_id')
    ->get();

        // return view('cartList',['products'=>$products] );
        return view('cartList',['products'=>$products] );
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartList');

    }
    function orderNow(){

    $userId=Session::get('user')['id'];
    $total= $products=DB::table('cart')
    ->join('products','cart.product_id','=','products.id' )
    ->where('cart.user_id',$userId)

    ->sum('products.price');

    return view('ordernow',['total'=>$total] );

}
function orderPlace(Request $req){

    $userId=Session::get('user')['id'];
    $allCart =Cart::where('user_id',$userId)->get();
    // return $req->input();
    foreach($allCart as $cart){
        $order = new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method="cash";
        // could be $req->payment
        $order->payment_status="pending";
        $order->address=$req->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
    }
    $req->input();
    return redirect('/');
    }
function myOrder(){

    $userId=Session::get('user')['id'];
    $orders= DB::table('orders')
    ->join('products','orders.product_id','=','products.id' )
    ->where('orders.user_id',$userId)
    ->get();
    // ->sum('products.price');

    return view('myorder',['orders'=>$orders] );
}
}
