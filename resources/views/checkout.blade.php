@extends('layout.layout')
@section('content')
    <?php $st = 0; ?>
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Checkout</h4>
                            <h2>Product name</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <section class="contact-us">
        <div class="container">
            <br>
            <br>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-6">
                            <em>Sub-total</em>
                        </div>

                        <div class="col-6 text-right">
                            <strong>{{$price}}</strong>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-6">
                            <em>Extra</em>
                        </div>

                        <div class="col-6 text-right">
                            <strong>Rs. 0.00</strong>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-6">
                            <em>Tax</em>
                        </div>

                        <div class="col-6 text-right">
                            <strong>Rs. 0.00</strong>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-6">
                            <em>Total</em>
                        </div>

                        <div class="col-6 text-right">
                            <strong>{{$price}}</strong>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="inner-content">
                <div class="contact-us">
                    <div class="contact-form">
                        <form action="/placeorder" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Name:</label>
                                        <input type="text" class="form-control" name="fname" value="{{ $res->frist_name }}  {{ $res->last_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Email:</label>
                                        <input type="text" class="form-control" name="email" value="{{ $res->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Phone:</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $res->phone }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Address 1:</label>
                                        <input type="text" class="form-control" name="address" value="{{ $res->address }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Address 2:</label>
                                        <input type="text" class="form-control" name="address2" value="{{ $res->address2 }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">City:</label>
                                        <input type="text" class="form-control" name="city" value="{{ $res->city }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">District:</label>
                                        <input type="text" class="form-control" name="dis" value="{{ $res->district }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Zip:</label>
                                        <input type="text" class="form-control" name="zip" value="{{ $res->zip }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Payment method</label>

                                        <select class="form-control">
                                            <option value="">Debit/Credit card</option>
                                            <option value="bank">Bank account</option>
                                            <option value="cash">Cash</option>
                                            <option value="paypal">PayPal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                {{-- <button type="button" class="filled-button pull-left">Back</button> --}}
                                <button type="submit" class="filled-button pull-right">Finish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
