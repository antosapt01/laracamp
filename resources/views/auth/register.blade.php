<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Login #7</title>
</head>

<body>

    <div class="content pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bg-primary pt-5">
                    <img src="{{asset('assets/images/ill_login_new.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4 mt-0">
                                <img src="assets/images/logo.png" height="50px" class="logo-2" alt="">
                                <h3></h3>
                                <h4 class="header-third">
                                    Start Today
                                </h4>
                                <p class="subheader">
                                    Because tomorrow become never
                                </p>
                            </div>
                            <form action="/register" method="post">
                                @csrf
                                <div class="form-group first mb-2">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group first mb-2">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">

                                </div>
                                <div class="form-group last mb-2">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password Confirm</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" value="Sign Up" class="btn btn-block btn-primary">

                                <span class="d-block text-center my-4 text-muted">&mdash; Or login with &mdash;</span>

                                <!-- <div class="social-login text-center">
                                <input type="submit" value="Sign in with github" class="btn btn-block btn-primary">
                                <input type="submit" value="Sign in with google" class="btn btn-block    btn-danger"> -->

                                <a href="#" class=" btn btn-block btn-primary  btn-success align-middle  text-decoration-none text-white">
                                    Sign in with github
                                </a>
                                <a href="/google-authentications" class="btn btn-block btn-primary btn-danger text-decoration-none text-white">
                                    Sign in with google
                                </a>
                        </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>


    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>