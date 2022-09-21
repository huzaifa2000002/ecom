@extends('master')
@section('content')
<style>

</style>
<div class="row ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner parent-image-small ">
            @foreach($products as $item)
            <div class="carousel-item  {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
              <img class="d-block  image-small " src={{$item['gallery']}} alt="First slide">
              <div class="carousel-caption carousel-text chkp">
                <h3>{{$item['name']}}</h3>
                <p>{{$item['description']}}</p>
              </div>
              </a>
            </div>
            @endforeach
        </div>

        <a class="carousel-control-prev improve-indicator" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bigger" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next improve-indicator" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon bigger" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<div class="trending-wrapper">
    <div class="trending-tag">
        <h3>Trending Products</h3>
    </div>
    <div class="carousel-inner parent-trending-image-small ">
        @foreach($products as $item)
        <a href="detail/{{$item['id']}}">
        <div class="parent-trending-image-small">

          <img class="trending-image-small" src={{$item['gallery']}} alt="First slide">
          {{-- <div class=""> --}}
            <h4 class="trending-h4">{{$item['name']}}</h4>
            {{-- <p>{{$item['description']}}</p> --}}
          </div>
        {{-- </div> --}}
        </a>
        @endforeach
    </div>
    {{-- <div class="carousel-inner parent-trending-image-small ">
        @foreach($products as $item)
          <img class="d-block  trending-image-small " src={{$item['gallery']}} alt="First slide">
          <div class="carousel-caption  chkp">
            <h3>{{$item['name']}}</h3>
          </div>
        @endforeach
    </div> --}}
</div>

@endsection
