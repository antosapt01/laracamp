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

    <title>Sign In</title>
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
                            <div class="mb-4">
                                <img src="assets/images/logo.png" height="50px" class="logo pb-2" alt="">
                                <h3></h3>
                                <h4 class="header-third">
                                    Start Today
                                </h4>
                                <p class="subheader">
                                    Because tomorrow become never
                                </p>
                            </div>
                            <form action="/login" method="post">
                                @csrf
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                    <div class="row">
                                        {{$error}}
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                <div class="form-group first mb-2">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" value="{{old('email')}}" name="email" id="email">

                                </div>

                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="/forgot-password" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                                <span class="d-block text-center my-4 text-muted">&mdash; Or login with &mdash;</span>

                                <div class="social-login text-center">
                                    <a href="#" class="facebook">
                                        <span class="icon-facebook mr-4"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="icon-twitter mr-4"></span>
                                    </a>
                                    <a href="/google-authentications" class="google">
                                        <span class="icon-google mr-4"></span>
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