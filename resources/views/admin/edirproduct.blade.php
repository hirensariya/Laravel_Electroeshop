@if (Session::has('editpro'))
    <script>
        alert('{{ Session::get('editpro') }}');
    </script>
@endif
@extends('layout.adminlayout')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3" style="color:blue">Add Product</h4>
                <form class="needs-validation" validate="" action="/admin/editproduct/{{ $product->id }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Product Image</label>
                        <input type="file" name="images[]" class="form-control" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="cat">Product Category</label>
                        <select name="cat" class="form-control">
                            <option value="{{ $product->cat }}">{{ $product->cat }}</option>
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
                            autofocus="" required="" value="{{ $product->name }}">
                        <div class="invalid-feedback">
                            Please enter Product Name
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" name="pprice" id="pprice" required="" autofocus=""
                            value="{{ $product->price }}">
                        <div class="invalid-feedback">
                            Please enter product price.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Password">Procduct Discription</label>
                        <input type="text" class="form-control" id="pdis" name="pdis" required="" autofocus=""
                            value="{{ $product->dis }}">
                        <div class="invalid-feedback">
                            Please enter product discription
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" name="singup" type="submit">Update Item</button>
                </form>
            </div>
        </div>
    </div>
    <!-- add product -->


@endsection
