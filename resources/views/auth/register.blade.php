<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>Sign Up – Swipe</title>
        <meta name="description" content="#">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/lib/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
        <!-- Swipe core CSS -->
        <link href="{{asset('css/swipe.min.css')}}" type="text/css" rel="stylesheet">
        <!-- Favicon -->
        <link href="{{asset('img/favicon.png')}}" type="image/png" rel="icon">
    </head>
    <body class="start">
        <main>
            <div class="layout">
                <!-- Start of Sign Up -->
                <div class="main order-md-2">
                    <div class="start">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="content">
                                    <h1>Create Account</h1>
                                    <div class="third-party">
                                        <button class="btn item bg-blue">
                                            <i class="fab fa-google"></i>
                                        </button>
                                        <button class="btn item bg-teal">
                                            <i class="fab fa-facebook"></i>
                                        </button>
                                        <button class="btn item bg-purple">
                                            <i class="fab fa-twitter"></i>
                                        </button>
                                    </div>
                                    <p>or use your email for registration:</p>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button class="btn icon"><i class="fab fa-person"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button class="btn icon"><i class="fab fa-envelope"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"placeholder="Password" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button class="btn icon"><i class="fab fa-lock"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                        <button class="btn icon"><i class="fab fa-lock"></i></button>
                                        </div>
                                        <button type="submit" class="btn button">Sign Up</button>
                                        <div class="callout">
                                            <span>Already a member? <a href="{{route('login')}}">Sign In</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sign Up -->
                <!-- Start of Sidebar -->
                <div class="aside order-md-1">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="preference">
                                <h2>Welcome Back!</h2>
                                <p>To keep connected with your friends please login with your personal info.</p>
                                <a href="{{asset('login')}}" class="btn button">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sidebar -->
            </div> <!-- Layout -->
        </main>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{asset("js/vendor/jquery-slim.min.js")}}"><\/script>')</script>
        <script src="{{asset('js/vendor/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>


</html>