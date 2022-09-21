@extends('master')
@section('content')
<style>

</style>
<div class="row space">
    <div class="col-6 mx-auto">
        <form action="register" method="POST" enctype="multipart/form">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">User Name</label>
              <input type="User Name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
              {{-- <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div><br>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            {{-- <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn space-top btn-primary">Register</button>
          </form>
    </div>
</div>
@endsection
