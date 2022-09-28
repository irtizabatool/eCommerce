@extends('master')
@section('content')
    <div class="custom-product">

        <div class="col-sm-10">
            <table class="table table-striped">

                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Delivery Charges</td>
                    <td>$ 10</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>${{$total + 10}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="container custom-login">
            <div class="row">
                <div class="col-sm-4 ">
                    <form action="/place_order" method="POST">
                        @csrf
                        <div class="mb-3">
                          <textarea name="address" placeholder="Enter your address" class="form-control" id="address" aria-describedby="emailHelp"></textarea>

                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Payment Method: </label><br>
                          <input type="radio" name="payment" value="cash"> <span>Online Payment</span><br>
                          <input type="radio" name="payment" value="cash"> <span>EMI Payment</span><br>
                          <input type="radio" name="payment" value="cash"> <span>Payment On delivery</span><br><br>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
