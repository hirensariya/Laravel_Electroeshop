@if (Session::has('update'))
    <script>
        alert('{{ Session::get('update') }}');
    </script>
@endif

@extends('layout.layout')
@section('content')
    <div class="container" style="padding-top: 8rem">

        <div class="row">
            <div class="col-md-12 order-md-12 mb-12">
            </div>
            <div class="col-md-12 order-md-12">
                <h4 class="mb-3">User Profile</h4>
                <form class="needs-validation" novalidate="" action="/editprof" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="first" id="firstName" placeholder=""
                                value="{{ $res->frist_name }}" required="" autofocus="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="last" placeholder=""
                                value="{{ $res->last_name }}" required="" autofocus="">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com"
                            autofocus="" value="{{ $res->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="Phone">Phone no.</label>
                        <input type="tel" class="form-control" name="phone" id="Phone" required="" autofocus=""
                            value="{{ $res->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" name="password" required=""
                            autofocus="" value="{{ $res->password }}">
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                            required="" autofocus="" value="{{ $res->address }}">
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" name="address2"
                            placeholder="Apartment or suite" value="{{ $res->address2 }}">
                    </div>
                    <div class="mb-3">
                        <label for="address2">City <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="city" name="city"
                            placeholder="Apartment or suite" value="{{ $res->city }}">
                    </div>
                    <div class="mb-3">
                        <label for="district">District <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="district" name="district"
                            placeholder="Apartment or suite" value="{{ $res->district }}">
                    </div>
                    <div class="mb-3">
                        <label for="address2">Zip/PostCode <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="zip" name="zip"
                            placeholder="Apartment or suite" value="{{ $res->zip }}">
                    </div>
                    <hr class="mb-4">

                    <button class="btn btn-primary btn-lg btn-block" style="background-color:rgb(240, 32, 32);"
                        name="singup" type="submit">Update</button>
                    <hr>
                </form>
            </div>
        </div>
    </div>
@endsection

