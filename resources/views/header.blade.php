
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
    $total = ProductController::cartItem();
}
else {
    return 'Login first';
}

?>
<style>
    .register{
        margin-left:10px;
    }
    .resolve{
    display: inline-block !important;
    /* border: 1px solid purple !important; */
    width: 68% !important;
}
    .resolve2{
    display: inline-block !important;
    /* border: 1px solid purple !important; */
    width: 30% !important;
}

    .left-sey{
        margin-left: 407px !important;
    }
    .space{
        margin-top:200px;
        height: 350px !important
    }
    .nav-link{
        padding-left: 100px !important;
    }
    .last-link{
        padding-right: 120px !important;
    }
    .bg-light{

        background-color:lightcoral !important;
    }
    .car-count{

        margin-left:340px;
    }



    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand left-sey" href="/">Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/cartList">Cart List <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorder">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link last-link" href="#">Link</a>
        </li>
      </ul>
      {{-- <form class="form my-2 my-lg-0" >
        <input class="form-control resolve mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
        <input class="form-control resolve2 mr-sm-2" type="submit" placeholder="Search" aria-label="Search" >
        <button  style="border:1px solid black" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
      <ul class="nav navbar-nav navbar-right car-count">
        <li><a href="/cartList">Cart ({{$total}})</a></li>&nbsp;&nbsp;&nbsp;
        @if(Session::has('user'))

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Log out</a></li>
                        {{-- <li><a href="/login">Login</a></li> --}}

                        {{-- <li><a href="#">Page 1-3</a></li> --}}
                    </ul>
                </li>

                <li class="register"><a href="/register">Register</a></li>
            @else{


        }
        @endif

      </ul>

    </div>
  </nav>
