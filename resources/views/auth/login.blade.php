<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/html/modern-light-menu/auth-cover-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 11:17:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SignIn Cover | BID MANAGER </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/Bid (1).png')}}" />
    <link href="{{asset('assets/css/light-loader.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/css/dark-loader.css')}}" rel="stylesheet"
        type="text/css" />
    <script src="{{asset('assets/js/loader.js')}}"></script>
    <link href="{{asset('assets/css/css.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"type="text/css" />
    <link href="{{asset('assets/css/light-main.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/light-perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/waves.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/light-structure.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/monokai-sublime.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/light-auth-cover.css')}}" rel="stylesheet"
        type="text/css" />

        <link href="{{asset('assets/css/dark-main.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/dark-structure.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/dark-perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/dark-auth-cover.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

</head>

<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div
                    class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>

                    <div class="auth-cover">

                        <div class="position-relative">

                            <img src="{{asset('assets/img/auth-cover.svg')}}" alt="auth-img">

                            <h2 class="mt-5 text-white font-weight-bolder px-2">Join the community of expert developers
                            </h2>
                            <p class="text-white px-2">It is easy to setup with great customer experience. Start your
                                7-day free trial</p>
                        </div>

                    </div>

                </div>

                <div
                    class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h2>Sign In</h2>
                                    <p>Enter your email and password to login</p>
                                </div>

                                @if($errors->any()) {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">:message</div>')) !!} 
                                @endif

                                <form action=" {{ route('auth.login') }} " method="post" class="row g-3 needs-validation" novalidate>
                                    @csrf

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{old('email')}}" required  placeholder="Enter a Valid Email ID *">
                                            <div class="invalid-feedback">
                                                Please provide a valid Email-ID.
                                            </div>
                                            <div class="valid-feedback">
                                                Valid Email ID
                                            </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter 8 Digit Password *" value="{{old('password')}}" required minlength="8">
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox"
                                            id="form-check-default" >
                                            <label class="form-check-label" for="form-check-default">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">SIGN IN</button>
                                    </div>
                                </div>

                                <div class="col-12 mb-4">
                                    <div class="">
                                        <div class="seperator">
                                            <hr>
                                            <div class="seperator-text"> <span>Or continue with</span></div>
                                        </div>
                                    </div>
                                </div>
                                </form>

                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100 ">
                                            <img src="{{asset('assets/img/google-gmail.svg')}}"
                                                alt="" class="img-fluid">
                                            <span class="btn-text-inner">Google</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src="{{asset('/assets/img/github-icon.svg')}}"
                                                alt="" class="img-fluid">
                                            <span class="btn-text-inner">Github</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src="{{asset('assets/img/twitter.svg')}}"
                                                alt="" class="img-fluid">
                                            <span class="btn-text-inner">Twitter</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Dont't have an account ? <a href="{{ route('auth.signup') }}"
                                                class="text-warning">Sign Up</a></p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script>
    
window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
}, false);
</script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>

</html>
