@extends('layout.adminlayout')
@section('content')

    <!-- add product -->
    @if (Session::has('addproduct'))
        <script>
            alert('{{ Session::get('addproduct') }}');
        </script>
    @endif
    <div class="container" style="padding-top: 8rem">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3" style="color:blue">Add Product</h4>
                <form class="needs-validation" validate="" action="/admin/product" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Product Image</label>
                        <input type="file" name="images[]" class="form-control" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="cat">Product Category</label>
                        <select name="cat" id="cat" class="form-control" onchange="div()">
                            <option value="">-Select-</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Camera">Camera</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Headphones">Headphones</option>
                        </select>
                        <div class="invalid-feedback">
                            Please enter Product Category
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Product Name</label>
                        <input type="text" class="form-control" id="pname" name="pname" placeholder="Product name"
                            autofocus="" required="">
                        <div class="invalid-feedback">
                            Please enter Product Name
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" name="pprice" id="pprice" required="" autofocus="">
                        <div class="invalid-feedback">
                            Please enter product price.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pdis">Product Discription</label>
                        <input type="text" class="form-control" id="pdis" name="pdis" required="" autofocus="">
                        <div class="invalid-feedback">
                            Please enter product discription
                        </div>
                    </div>
                    <div class="mb-3" id="productColor">
                        <label for="pdis">Procduct Color</label><br />
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-xl-6" style="display: flex">
                                <input type="checkbox" name="color[]" value="red" style="margin-left:1rem">red<br />
                                <input type="checkbox" name="color[]" value="yellow" style="margin-left:1rem">yellow<br />
                                <input type="checkbox" name="color[]" value="black" style="margin-left:1rem">black<br />
                                <input type="checkbox" name="color[]" value="white" style="margin-left:1rem">white<br />
                                <input type="checkbox" name="color[]" value="green" style="margin-left:1rem">green<br />
                                <input type="checkbox" name="color[]" value="blue" style="margin-left:1rem">blue<br />
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-6" style="display: flex">
                                <input type="checkbox" name="color[]" value="purpule" style="margin-left:1rem">purpule<br />
                                <input type="checkbox" name="color[]" value="gray" style="margin-left:1rem">gray<br />
                                <input type="checkbox" name="color[]" value="brown" style="margin-left:1rem">brown<br />
                                <input type="checkbox" name="color[]" value="silver" style="margin-left:1rem">silver<br />
                                <input type="checkbox" name="color[]" value="orange" style="margin-left:1rem">orange<br />
                                
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-6" style="display: flex">
                                <input type="checkbox" name="color[]" value="pink" style="margin-left:1rem">pink<br />
                                <input type="checkbox" name="color[]" value="navy" style="margin-left:1rem">navy<br />
                            </div>

                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" name="singup" type="submit">Add Item</button>
                </form>
            </div>
        </div>
    </div>
    <!-- add product -->

@endsection
