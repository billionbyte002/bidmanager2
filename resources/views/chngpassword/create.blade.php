<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Password Reset Cover | BID MANAGER </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/Bid (1).png')}}"/>
    <link href="{{asset('assets/css/light-loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/dark-loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/js/dark-loader.js')}}"></script>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('assets/css/css.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

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
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div class="auth-container d-flex h-100">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>
                        
                    <div class="auth-cover">
    
                        <div class="position-relative">
    
                            <img src="{{asset('assets/img/auth-cover.svg')}}" alt="auth-img">
    
                            <h2 class="mt-5 text-white font-weight-bolder px-2">Join the community of expert developers</h2>
                            <p class="text-white px-2">It is easy to setup with great customer experience. Start your 7-day free trial</p>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column ms-lg-auto  align-self-center me-lg-0 mx-auto">
                    <div class="card">
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Password Reset</h2>
                                    <p>Enter your Email to verify </p>
                                    
                                </div>
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <p style="color:red;">{{ $error }}</p>
                                    @endforeach
                                @endif
                                
                                <form action="{{ route('auth.resetpassword') }}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        @if(isset($user))
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                        @endif
                                        <label class="form-label">Enter New Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">Submit</button>
                                    </div>
                                </div>
                                    </form>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>
