@if (Session::has('Success'))
    <script>
        alert('{{ Session::get('Success') }}');
    </script>
@endif
@if (Session::has('Login'))
    <script>
        alert('{{ Session::get('Login') }}');
    </script>
@endif
@if (Session::has('logout'))
    <script>
        alert('{{ Session::get('logout') }}');
    </script>
@endif
@if (Session::has('checkoutstsuts'))
    <script>
        alert('{{ Session::get('checkoutstsuts') }}');
    </script>
@endif
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>ElectroEshop</title>

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h2><em>Electro</em>eshop</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categary
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/product/Laptop">Laptop</a>
                            <a class="dropdown-item" href="/product/Camera">Camera</a>
                            <a class="dropdown-item" href="/product/Mobile">Mobile</a>
                            <a class="dropdown-item" href="/product/Headphones">Headphones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/checkout">Checkout</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">About</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="/about">About Us</a>
                            <a class="dropdown-item" href="/contact">Contact Us</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart"><h4><i class="bi bi-cart4"></i></h4></a>
                    </li>
                    @if (Session::has('logid'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">{{ Session::get('logname') }} <i class="bi bi-person"></i></a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="/editprof">My Profile</a>
                            <a class="dropdown-item " href="/vieworder">My Order</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>
                            COPYRIGHT ?? 2020 ElectroEShop
                            <a href="https://www.#/">*</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>



</body>

</html>
