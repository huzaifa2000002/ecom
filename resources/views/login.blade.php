@extends('master')
@section('content')
<style>

</style>
<div class="row space">
    <div class="col-6 mx-auto">
        <form action="login" method="POST" enctype="multipart/form">
            <div class="form-group">
                @csrf
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn space-top btn-primary">Login</button>
          </form>
    </div>
</div>
@endsection
