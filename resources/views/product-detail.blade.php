@extends('layout.layout')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>{{ $product->prices }}</h4>
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid wc-image">
                    </div>

                    <br>

                    <div class="row">
                        @foreach ($product->image as $collection)
                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="{{ $collection }}" alt="" class="img-fluid">
                                </div>
                                <br>
                            </div>
                        @endforeach
                    </div>

                    <br>
                </div>

                <div class="col-md-5">
                    <div class="sidebar-item recent-posts">
                        <div class="sidebar-heading">
                            <h2>Info</h2>
                        </div>

                        <div class="content">
                            <p>product description will be avaliable soon</p>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="contact-us">
                        <div class="sidebar-item contact-form">
                            <div class="sidebar-heading">
                                <h2>Add to Cart</h2>
                            </div>

                            <div class="content">
                                <form id="contact">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">Extra 1</label>
                                                <select>
                                                    <option value="0">Extra A</option>
                                                    <option value="0">Extra B</option>
                                                    <option value="0">Extra C</option>
                                                    <option value="0">Extra D</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">Quantity</label>
                                                <input type="text" value="1" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button" onclick="update({{ $product->id }})">Add to
                                                    Cart</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </section>

    <div class="section contact-us">
        <div class="container">
            <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                    <h2>Description</h2>
                </div>

                <div class="content">
                    <p>Product name adipisicing elit. Mollitia doloremque sit, enim sint odio corporis illum perferendis,
                        unde repellendus aut dolore doloribus minima qui ullam vel possimus magnam ipsa deleniti.</p>

                    <br>

                    <p>Product name adipisicing elit. Necessitatibus ducimus ab numquam magnam aliquid, odit provident
                        consectetur corporis eius blanditiis alias nulla commodi qui voluptatibus laudantium quaerat tempore
                        possimus esse nam sed accusantium inventore? Sapiente minima dicta sed quia sunt?</p>

                    <br>

                    <p>Product name adipisicing elit. Rerum qui, corrupti consequuntur. Officia consectetur error amet
                        debitis esse minus quasi, dicta suscipit tempora, natus, vitae voluptatem quae libero. Sunt nulla
                        culpa impedit! Aliquid cupiditate, impedit reiciendis dolores, illo adipisci, omnis dolor distinctio
                        voluptas expedita maxime officiis maiores cumque sequi quaerat culpa blanditiis. Quia tenetur
                        distinctio rem, quibusdam officiis voluptatum neque!</p>
                </div>

                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
<script>
    function update(param) {
        // console.log(param);
        event.preventDefault()
        var product_id = param;
        $.ajax({
            url: "/addcart",
            type: "get",
            data: {
                id: product_id
            },
            success: function(res) {
                //   $("#crt_table").html(res);
                alert(res.msg)
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    }

    // function wish(param) {
    //     console.log(param);
    //     var product_id = param;
    //     $.ajax({
    //         url: "/addwhis",
    //         type: "get",
    //         data: {
    //             id: product_id
    //         },
    //         success: function(res) {
    //             $("#crt_table").html(res);
    //             alert(res.msg)
    //         },
    //         error: function(data) {
    //             console.log('Error:', data);
    //         }
    //     });
    // }
</script>