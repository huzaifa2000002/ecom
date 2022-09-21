@extends('master')
@section('content')
<style>
    /* img.trending-image {
    height: 200px;
}
.chky{
    border: 1px solid rgb(105, 105, 36);

}

.trending-h4{
    background-color:lightpink;
    margin-top:20px;

}
.trending-row{
    margin-top:50px;
    border-bottom:1px solid rgb(146, 146, 146);

} */
</style>
<div class="row ">
    <div class="custom-product ">

        <div class="col-12 ">
            <div class="trending-wallpaper">
                <h4 class="trending-h4 text-center">Result for Product</h4>
                <a href="/orderNow" class="btn btn-success">Order</a>
                @foreach($products as $item)
                <div class="row trending-row">
                    <div class="col-5">
                        <div class="searched-item">
                            <a href="detail/{{$item->id}}"></a>
                            <img class="trending-image" src="{{$item->gallery}}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="searched-item">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <a href="/removeCart/{{$item->cart_id}}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
@endsection
