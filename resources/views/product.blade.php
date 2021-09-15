@extends('layout.layout')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Products</h4>
                            <h2>Choose the best product for you!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="all-blog-posts">
                <div class="row">
                    @foreach ($product as $collection)
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                @foreach ($collection->image as $p)
                                    @if ($loop->iteration <= 1)
                                        <div class="blog-thumb">
                                            <a href="/product-detail/{{ $collection->id }}">
                                                <img src="{{ asset('assets/images/product-1-720x480.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="down-content">
                                    <span> {{ $collection->price }} </span>
                                    <a href="/product-detail/{{ $collection->id }}">
                                        <h4>{{ $collection->name }}</h4>
                                    </a>
                                    <p>{{ $collection->dis }}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-bullseye"></i></li>
                                                    <li><a href="/product-detail/{{ $collection->id }}">View Product</a></li>
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

@endsection
