@extends('master')
@section('content')
<style>

</style>
<div class="row ">
    <div class="custom-product ">
        <div class="col-12 ">
            <div class="trending-wallpaper">
                <h4 class="trending-h4 text-center">My Order</h4>
                {{-- <a href="/orderNow" class="btn btn-success">Order</a> --}}
                @foreach($orders as $item)
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
                                <h2><span>Name: </span> {{$item->name}}</h2>
                                <h5><span>Description: </span>{{$item->description}}</h5>
                                <h5><span>Status: </span>{{$item->status}}</h5>
                                <h5><span>Payment Status: </span>{{$item->payment_status}}</h5>
                                <h5><span>Payment Method: </span>{{$item->payment_method}}</h5>
                                <h5><span>Address: </span>{{$item->address}}</h5>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-3">
                        <a href="/removeCart/{{$item->cart_id}}" class="btn btn-danger">Delete</a>
                    </div> --}}
                </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
@endsection
