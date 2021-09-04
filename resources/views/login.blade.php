<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="stylesheet" href="./assets/css/login.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Sign Up</h1>
                <input type="text" placeholder="Your Name" name="name" />
                <input type="email" placeholder="Email" name="email" />
                <input type="text" placeholder="Address" name="address" />
                <input type="text" placeholder="Mobile No." name="mobile_no" />
                <input type="password" placeholder="Password" name="password" />
                <input type="password" placeholder="Re-enter Password" name="conf_password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Login</h1>
                <input type="text" placeholder="Enter Mobile no" name="mobile_no" />
                <input type="password" placeholder="Enter Password" name="password" />
                <a href="#">Forgot password?</a>
                <button>Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to ElectoEshop</h1>
                    <p>Where you can buy electronic products with best quality.</p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer style="background-color: #f48840;">
        <p style="color: black;"><b>
                Make your life easy with technology.</b>
        </p>
    </footer>
    <script src="./assets/js/login.js"></script>

</body>

</html>
