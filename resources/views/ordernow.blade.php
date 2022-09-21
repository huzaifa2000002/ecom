@extends('master')
@section('content')
<style>
/* .order-label{
    margin-top:20px;
    margin-bottom:20px;
}
.amount{
    border: 1px solid rgb(187, 187, 187);
} */
</style>
<div class="row ">
    <div class="custom-product ">

        <div class="col-12">

            <table class="table">
                <thead>
                  <tr class="amount">
                    <td >Amount</td>
                    <td>{{$total}}$</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="amount">
                    <td>Tax</td>
                    <td>0$</td>
                  </tr>
                  <tr class="amount">
                    <td>Delivery</td>
                    <td>10$</td>
                  </tr>
                  <tr class="amount">
                      <td>Total Amount</td>
                      <td>{{$total+10}}$</td>

                  </tr>
                </tbody>
              </table>
        </div>
        <div class="">
            <form method="post" action="/orderplace">
                @csrf
                <div class="form-group">
                  <label class="order-label" for="">Address</label>
                  <textarea name="address" placeholder="enter your address" class="form-control" id="" cols="5" rows="5"></textarea>
                  {{-- <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter address"> --}}
                </div>

                <label class="order-label" for="">Payment Method</label>
                <div class="form-group form-check">
                  <input type="radio" value="cash" name="payment">
                  <label class="form-check-label" for="exampleCheck1">Online</label><br><br>
                  <input type="radio" value="cash" name="payment">
                  <label class="form-check-label" for="exampleCheck1">EMI</label><br><br>
                  <input type="radio" value="cash" name="payment">
                  <label class="form-check-label" for="exampleCheck1">Payment On Delivery</label><br><br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection
