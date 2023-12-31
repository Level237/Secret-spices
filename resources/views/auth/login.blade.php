<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Connexion-Secret Spices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/assets/js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style">

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="authentication-bg pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-100 gap-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="index.html.htm" class="logo-dark">
                        <span><img src="{{ asset('images/logo secret bg.png') }}" alt="dark logo" height="50"></span>
                    </a>
                    <a href="{{ route('homepage') }}" class="logo-light">
                        <span><img src="{{ asset('images/logo secret bg.png') }}" alt="logo" height="50"></span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4 class="mt-0">Connexion</h4>
                    <p class="text-muted mb-4">Entrez votre email et votre mot de passe</p>

                    <!-- form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" name="email" id="emailaddress" placeholder="Enter your email">
                        </div>
                        @error('email')
                        <div style="color:#c70609">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            {{-- <a href="pages-recoverpw-2.html.htm" class="text-muted float-end"><small>Forgot your password?</small></a> --}}
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password">
                        </div>
                        @error('password')
                        <div style="color:#c70609">{{ $message }}</div>
                        @enderror
                        {{-- <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div> --}}
                        <div class="d-grid mb-0 text-center">
                            <button class="btn text-white" style="background-color: #c70609" type="submit"><i class="mdi mdi-login"></i>Connexion </button>
                        </div>
                        <!-- social-->

                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                {{-- <footer class="footer footer-alt">
                    <p class="text-muted">Don't have an account? <a href="pages-register-2.html.htm" class="text-muted ms-1"><b>Sign Up</b></a></p>
                </footer> --}}

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            {{-- <div class="auth-user-testimonial">
                <h2 class="mb-3">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Hyper Admin User
                </p>
            </div> <!-- end auth-user-testimonial--> --}}
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
