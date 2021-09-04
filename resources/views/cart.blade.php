@extends('layout.layout')
@section('content')

<div class="main-banner header-text" style="padding-top:10rem">
    <div class="container">
      <table class="table table" style="background-color: #f7f7f7;"> 
          <thead>
              <tr>
                  <th></th>
                  <th>Image</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th >Quantity</th>
                  <th>Total</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td><a class="remove" href="#">
                          <fa class="fa fa-close"></fa>
                      </a></td>
                  <td><a href="#"><img
                              src="" alt="img"></a></td>
                  <td><a class="aa-cart-title"
                          href="#">Name</a>
                  </td>
                  <td>Price</td>
                  <td colspan="12"><input class="aa-cart-quantity" type="number" style="width: 10%;"></td>
              </tr>
          </tbody>
        </table>
    </div>
  </div>

@endsection