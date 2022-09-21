@extends('master')
@section('content')
<style>
/* .detail-img{
    height: 400px;
}
.category{
    display: table;
    background-color:lightpink;
}
.distance-top{
    margin-top:100px;

}
.product-img{
    margin-top:50px;
} */

</style>
<div class="row">
    <div class="col-6 product-img">
        <img class="detail-img" src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-6 distance-top align-items-center">
        <a href="/">Go back</a>
        <h6 class="category">{{$product['product']}}</h6>
        <h4>{{$product['name']}}</h4>
        <h5>{{$product['description']}}</h5>
        <h6>{{$product['price']}}</h6>
        <form action="/add_to_cart" method="post" enctype="multipart/form">
        @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-success">Buy Now</button>
        </form>
    </div>


</div>


@endsection
