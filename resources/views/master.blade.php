<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecomm proj</title>
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
/* product */
.improve-indicator{
        opacity: 100% !important;

    }
    .bigger{
        width:4rem !important;
        height:4rem !important;
        color:black !important;
        background-color:black !important;

    }
    .image-small{

        height:500px;

    }
    .parent-image-small{
        width:600px !important;
        margin-left: 400px;
    }
    .chky{
        border: 1px solid purple !important;
    }
    .chkp{
        border: 1px solid rgb(147, 218, 16) !important;
    }
    .chkr{
        border: 1px solid rgb(218, 16, 16) !important;
    }
    .carousel-text {
        /* color:black !important; */
        font-size:20px;
        margin-right: 100px;
        background-repeat: no-repeat !important;
        background-image: url(data:image/jpeg;base64,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);

    }
    .trending-image-small {
    height: 200px;
}

.parent-trending-image-small {
    display: flex;
    justify-content: space-between;
}
.trending-tag {
    width: 100%;
    background-color: lightpink;
    text-align: center;
}
.carousel-trending{
    background: none !important;
}
.trending-h4{
    margin-top:200px;
    margin-left: -150px;
}
/* product close */

/* login  */
.space-top{
        margin-top:20px;
    }
/* login  close */
/* ordernow  */

.order-label{
    margin-top:20px;
    margin-bottom:20px;
}
.amount{
    border: 1px solid rgb(187, 187, 187);
}
/* ordernow  close */

/* detail */
.detail-img{
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
}
/* detail close */

/* cartlist */
img.trending-image {
    height: 200px;
}
.chky{
    border: 1px solid rgb(105, 105, 36);

}
/*
.trending-h4{
    background-color:lightpink;
    margin-top:20px;

} */
.trending-row{
    margin-top:50px;
    border-bottom:1px solid rgb(146, 146, 146);

}
span {
    background-color: lightpink;
    /* font-size: 15px; */
    text-align: center;
    display: block;
}
/* cartlist close */
</style>
<body>
    {{View::make('header')}}
    <div class="container">
        @yield('content')
    </div>
    {{View::make('footer')}}

</body>

</html>

