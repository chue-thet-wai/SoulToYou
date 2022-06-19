<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Soul To You</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!--<link href="https://bootswatch.com/4/minty/bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="{{ asset('js/user.js') }}"></script>
        <!-- Styles -->
        <link href="{{ asset('css/user.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login_alert.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased" style="background: #fff !important;">
        <div class="row">
            <p class="website_welcome">
                Hello! We are Soul To You
            </p>
            <div id="app" style="overflow-x: hidden;">
                <nav class="navbar user-navbar navbar-default" style="margin-bottom:0px !important;">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img class="navbar-icon" src="{{asset('images/navbar_icon.jpg')}}"/>
                                <p class="navbar-title">SOUL TO YOU</p>
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right mainright-navbar">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/news')}}">NEWS <img src="{{asset('images/menu_down_arrow.png')}}" /></a>                            
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/videos')}}">VIDEOS <img src="{{asset('images/menu_down_arrow.png')}}" /></a>                            
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/artists') }}">ARTISTS <img src="{{asset('images/menu_down_arrow.png')}}" /></a>                            
                                </li>
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <!--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>-->
                                            <a class="nav-link"
                                                style="cursor: pointer" 
                                                data-toggle="modal" 
                                                data-target="#loginModal">{{ __('LOGIN') }}
                                            </a>
                                        </li>
                                    @endif

                                    <!--@if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif-->
                                @else
                                    <li class="dropdown">
                                        <a id="navbarDropdown" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}<span class="caret">
                                        </a>

                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container user_container" >
            @yield('usercontent')
        </div>
        <footer class="page-footer font-small blue">
            <div class="row">
                <div class="footer-up">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 fd-div-one">
                            <div class="fd-one">SOUL TO YOU</div>
                            <div class="fd-two">Making the world a better place.</div>
                            <div class="fd-three">
                                <div class="fa fa-facebook fb"></div>
                                <div class="fa fa-instagram insta"></div>
                                <div class="fa fa-twitter twit"></div>
                            </div>
                        </div>
                        <div class="col-sm-2 fd-div-two">
                            <h5>COMPANY</h5>
                            <a>About</a>
                            <a>Facebook</a>
                            <a>Instagram</a>
                            <a>Twitter</a>
                        </div>
                        <div class="col-sm-2 fd-div-three">
                            <h5>HELP</h5>
                            <a>Contact us</a>
                            <a>About us</a>
                            <a>Features</a>
                        </div>
                        <div class="col-sm-2 fd-div-four">
                            <h5>RESOURCES</h5>
                            <a>Testimonials</a>
                            <a>Support</a>
                            <a>Terms</a>
                            <a>Privacy</a>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>              
                <div class="footer-copyright footer-down text-center py-3">
                    <p>2022 SOUL TO YOU, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <!-- For Login Alert-->
        @php
            echo " 
            <script type='text/javascript'>
                $(document).ready(function() {
                    $('.input100').each(function(){
                        $(this).on('blur', function(){
                            if($(this).val().trim() != '') {
                                $(this).addClass('has-val');
                            }
                            else {
                                $(this).removeClass('has-val');
                            }
                        })    
                    });
                    var showPass = 0;
                    $('.btn-show-pass').on('click', function(){
                        if(showPass == 0) {
                            $(this).next('input').attr('type','text');
                            $(this).find('i').removeClass('zmdi-eye');
                            $(this).find('i').addClass('fa-eye-slash');
                            showPass = 1;
                        }
                        else {
                            $(this).next('input').attr('type','password');
                            $(this).find('i').addClass('zmdi-eye');
                            $(this).find('i').removeClass('fa-eye-slash');
                            showPass = 0;
                        }
                        
                    });

                });
            </script>
        ";
        @endphp

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true" >
            <div class="modal-dialog" role="document" style="width: 390px;">
                <div class="modal-content">
                    <div class="modal-body" style="padding:0px !important;">
                        <div class="limit">
                            <div class="login-container">
                                <div class="bb-login">
                                    <form  class="bb-form validate-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <span class="bb-form-title p-b-26"> {{ __('Login') }} </span> <span class="bb-form-title p-b-48"> <i class="mdi mdi-symfony"></i> </span>
                                        @php $errormessage=""; @endphp
                                        @error('email')
                                            @php $errormessage.=$message; @endphp
                                            
                                        @enderror
                                        @error('password')
                                            @php $errormessage.="<br />".$message; @endphp                    
                                        @enderror
                                        @php 
                                            if($errormessage !=""){
                                                echo '<div class="alert alert-warning" role="alert">
                                                    <strong>'.$errormessage.'</strong>
                                                </div>';
                                            } 
                                        @endphp
                                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c"> 
                                            <input class="input100 @error('email') is-invalid @enderror"" type="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus> 
                                            <span class="bbb-input" data-placeholder="Email"></span> 
                                        </div>               
                                        
                                        <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                                            <!--<span class="btn-show-lock"> <i class="fa fa-lock fa-lg position-absolute"></i> </span> -->
                                            <span class="btn-show-pass"> <i class="far fa-eye show_password"></i> </span> 
                                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" autocomplete="current-password"> 
                                            <span class="bbb-input" data-placeholder="Password"></span> 
                                        </div>  
                            
                                        @if (Route::has('password.request'))
                                            <div class="flex justify-end items-center mt-2"> 
                                                <a href="{{ route('password.request') }}" class="text-gray-400 hover:text-gray-600">{{ __('Forgot Your Password?') }}</a> 
                                            </div>
                                        @endif
                                        <div class="login-container-form-btn">               
                                            <div class="bb-login-form-btn">
                                                <div class="bb-form-bgbtn"></div> <button class="bb-form-btn">  {{ __('Login') }} </button>
                                            </div>
                                        </div>
                                        @if (Route::has('register'))
                                            <div class="login-container-form-btn">               
                                                <div class="bb-login-form-btn">
                                                    <div class="bb-form-bgbtn"></div> <a href="{{ route('register') }}" class="bb-form-btn-reg"> Register </a>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row line-group justify-content-center">
                                            <span class="line"></span> 
                                            <small class="px-2 line-text">OR</small> 
                                            <span class="line"></span> 
                                        </div> 
                                        <div class="row social-group justify-content-center">
                                            <a href="{{ url('auth/google') }}">                    
                                                <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;">
                                                    <span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google
                                                </button>  
                                            </a>
                                            <a href="{{ url('auth/facebook') }}">                
                                                <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;">
                                                    <span class="login-facebook"><div class="fa fa-facebook" width="25"></div></span> Facebook
                                                </button> 
                                            </a>                   
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
