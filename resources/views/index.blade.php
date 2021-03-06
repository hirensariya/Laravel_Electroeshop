@extends('layout.layout')
@section('content')
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                <div class="item">
                    <img src="assets/images/product-1-720x480.jpg" alt="">
                    <div class="item-content">

                        <div class="main-content">
                            <div class="meta-category">
                            </div>

                            <a href="vacation-details.html">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                            </a>

                            <ul class="post-info">
                                <li>Product description will avaliable soon....</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/product-2-720x480.jpg" alt="">
                    <div class="item-content">

                        <div class="main-content">
                            <div class="meta-category">

                            </div>

                            <a href="vacation-details.html">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                            </a>

                            <ul class="post-info">
                                Product description will avaliable soon....
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/product-3-720x480.jpg" alt="">
                    <div class="item-content">

                        <div class="main-content">
                            <div class="meta-category">

                            </div>

                            <a href="vacation-details.html">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                            </a>

                            <ul class="post-info">
                                <li>Product description will avaliable soon....</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/product-4-720x480.jpg" alt="">
                    <div class="item-content">

                        <div class="main-content">
                            <div class="meta-category">

                            </div>

                            <a href="vacation-details.html">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                            </a>

                            <ul class="post-info">
                                <li>Product Name adipisicing elit. Ab aliquid, saepe nemo molestiae. Optio eaque
                                    dignissimos, earum
                                    officia vel amet.</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <section class="blog-posts grid-system">
        <div class="container">
            <div class="all-blog-posts">
                <h2 class="text-center">Featured Products</h2>
                <br>
                <div class="row">
                    @foreach ($product as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                @foreach ($item->image as $p)
                                    @if ($loop->iteration <= 1)
                                        <div class="blog-thumb">
                                            <a href="/product-detail/{{ $item->id }}">
                                                <img src="/image/{{$p}}" alt="" style="height:15rem; width:15rem">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="down-content">

                                    <a href="/product-detail/{{ $item->id }}">
                                        <h4>{{ $item->name }}</h4>
                                    </a>
                                    <p>{{ $item->dis }}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-bullseye"></i></li>
                                                    <li><a href="/product-detail/{{ $item->id }}">View Product</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>Feel free for any queries.</span>
                                <h4>We are here to provide the best services......</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    <a href="/contact">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
