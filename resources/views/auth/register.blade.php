@extends('layouts.nav')

@section('usercontent')

<div class="container" style="margin:5%;">
    <div class="frame">
        <div class="nav login-nav" style="display: block;">
            <ul class="links">
                <li class="signin-inactive"><a href="{{ route('login') }}" class="btn">Sign in</a></li>
                <li class="signup-active"><a href="{{ route('register') }}" class="btn">Sign up</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class="form-signin" action="{{ route('login') }}" method="post" name="form"> 
                @csrf
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
                <div class="row line-group justify-content-center">
                    <div class="col-md-5"><div class="line" style="width:100% !important;"></div></div>
                    <div class="col-md-2" style="margin-top: -3%;"><small class="px-2 line-text">OR</small></div>
                    <div class="col-md-5"> <div class="line" style="width:100% !important;"></div> </div>                                        
                </div> 
                <div class="row social-group justify-content-center">
                    <div class="col-md-6">
                        <a href="{{ url('auth/google') }}">                    
                            <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;width:100% !important;">
                                <span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google
                            </button>  
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('auth/facebook') }}">                
                            <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;width:100% !important;">
                                <span class="login-facebook"><div class="fa fa-facebook" width="25"></div></span> Facebook
                            </button> 
                        </a>  
                    </div>                 
                </div>
            </form>
            <form class="form-signup" action="{{ route('register') }}" method="post" name="form"> 
                @csrf

                @php $errormessage=""; @endphp

                @error('name')
                    @php $errormessage.=$message; @endphp
                @enderror
                @error('email')
                    @php $errormessage.=$message; @endphp
                    
                @enderror
                @error('password')
                    @php $errormessage.="<br />".$message; @endphp                    
                @enderror
                @php 
                    if($errormessage !=""){
                        echo '<div class="alert alert-warning" role="alert"  style="margin-top: -40%;margin-bottom: 5px !important;">
                            <strong>'.$errormessage.'</strong>
                        </div>';
                    } 
                @endphp
                <div class="wrap-input100 validate-input" data-validate="Enter Name"> 
                    <input class="input100 @error('name') is-invalid @enderror"" type="name" name="name" value="{{ old('name') }}" autocomplete="name" autofocus> 
                    <span class="bbb-input" data-placeholder="Name"></span> 
                </div>   

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c"> 
                    <input class="input100 @error('email') is-invalid @enderror"" type="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus> 
                    <span class="bbb-input" data-placeholder="Email"></span> 
                </div>               

                <div class="wrap-input100 validate-input" data-validate="Enter password">  
                    <span class="btn-show-pass"> <i class="far fa-eye show_password"></i> </span> 
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" autocomplete="current-password"> 
                    <span class="bbb-input" data-placeholder="Password"></span> 
                </div> 
                
                <div class="wrap-input100 validate-input" data-validate="Enter Comfirm password">  
                    <span class="btn-show-pass"> <i class="far fa-eye show_password"></i> </span> 
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" autocomplete="new-password">
                    <span class="bbb-input" data-placeholder="Password Verify"></span> 
                </div> 

                @if (Route::has('password.request'))
                    <div class="flex justify-end items-center mt-2"> 
                        <a href="{{ route('password.request') }}" class="text-gray-400 hover:text-gray-600">{{ __('Forgot Your Password?') }}</a> 
                    </div>
                @endif
                <div class="login-container-form-btn">               
                    <div class="bb-login-form-btn">
                        <div class="bb-form-bgbtn"></div> <button class="bb-form-btn">  {{ __('Register') }} </button>
                    </div>
                </div>
                <div class="row line-group justify-content-center">
                    <div class="col-md-5"><div class="line" style="width:100% !important;"></div></div>
                    <div class="col-md-2" style="margin-top: -3%;"><small class="px-2 line-text">OR</small></div>
                    <div class="col-md-5"> <div class="line" style="width:100% !important;"></div> </div>                                        
                </div> 
                <div class="row social-group justify-content-center">
                    <div class="col-md-6">
                        <a href="{{ url('auth/google') }}">                    
                            <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;width:100% !important;">
                                <span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google
                            </button>  
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('auth/facebook') }}">                
                            <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;width:100% !important;">
                                <span class="login-facebook"><div class="fa fa-facebook" width="25"></div></span> Facebook
                            </button> 
                        </a>  
                    </div>                 
                </div>
            </form>            
        </div>
    </div>
    @php
        echo "
        <script type='text/javascript'>
            $(document).ready(function() {
                //funcy input
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

                //show-hide password
                var showPass = 0;
                $('.btn-show-pass').on('click', function(){
                    if(showPass == 0) {
                        $(this).next('input').attr('type','text');
                        $(this).find('i').removeClass('fa-eye');
                        $(this).find('i').addClass('fa-eye-slash');
                        showPass = 1;
                    }
                    else {
                        $(this).next('input').attr('type','password');
                        $(this).find('i').addClass('fa-eye');
                        $(this).find('i').removeClass('fa-eye-slash');
                        showPass = 0;
                    }
                    
                });

                $('.form-signin').toggleClass('form-signin-left');
                $('.form-signup').toggleClass('form-signup-left');
                $('.frame').toggleClass('frame-long');
                $('.signup-inactive').toggleClass('signup-active');
                $('.signin-active').toggleClass('signin-inactive');
                $('.forgot').toggleClass('forgot-left');
                $('.btn').removeClass('idle').addClass('active');

                /*$('.btn').click(function() {
                    $('.form-signin').toggleClass('form-signin-left');
                    $('.form-signup').toggleClass('form-signup-left');
                    $('.frame').toggleClass('frame-long');
                    $('.signup-inactive').toggleClass('signup-active');
                    $('.signin-active').toggleClass('signin-inactive');
                    $('.forgot').toggleClass('forgot-left');
                    $(this).removeClass('idle').addClass('active');
                });*/

            });  
            
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
            @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');
            @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

            body{
                background:#f2f2f2 !important;
            }
            .frame {
                width: 420px;
                height: 600px;
                background: #ffffff;
                background-size: cover;
                margin-left: auto;
                margin-right: auto;
                border-top: solid 1px rgba(255, 255, 255, .5);
                border-radius: 5px;
                box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
                overflow: hidden;
                transition: all .5s ease
            }

            .frame-long {
                height: 700px
            }

            .frame-short {
                height: 400px;
                margin-top: 50px;
                box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.1)
            }
            @media (max-width: 576px) {
                .frame {
                    padding: 0px 15px 33px 15px;
                    width: 380px;
                }
            }
            .login-nav {
                width: 100%;
                height: 100px;
                padding-top: 40px;
                opacity: 1;
                transition: all .5s ease
            }

            .login-nav .nav-up {
                transform: translateY(-100px);
                opacity: 0
            }

            .login-nav li {
                padding-left: 10px;
                font-size: 18px;
                display: inline;
                text-align: left;
                text-transform: uppercase;
                padding-right: 10px;
                color: #000000
            }

            .signin-active a {
                padding-bottom: 10px;
                color: #000000;
                font-weight:bold;
                text-decoration: none;
                border-bottom: solid 2px #1059FF;
                transition: all .25s ease;
                cursor: pointer;
                width:40%;
            }

            .signin-inactive a {
                padding-bottom: 0;
                color: #ccc;
                text-decoration: none;
                border-bottom: none;
                cursor: pointer;
                width:40%;
            }

            .signup-active a {
                cursor: pointer;
                color: #000000;
                font-weight:bold;
                text-decoration: none;
                border-bottom: solid 2px #1059FF;
                padding-bottom: 10px;
                width:40%;
            }

            .signup-inactive a {
                cursor: pointer;
                color: #ccc;
                text-decoration: none;
                transition: all .25s ease;
                width:40%;
            }

            .btn.active, .btn:active {
                box-shadow: none;
            }

            .form-signin {
                font-size: 16px;
                font-weight: 300;
                padding-left: 37px;
                padding-right: 37px;
                padding-top: 25px;
                transition: opacity .5s ease, transform .5s ease
            }

            .form-signin-left {
                transform: translateX(-400px);
                opacity: .0
            }

            .form-signup {
                font-size: 12px;
                font-weight: 300;
                padding-left: 37px;
                padding-right: 37px;
                padding-top: 25px;
                position: relative;
                top: -375px;
                left: 400px;
                opacity: 0;
                transition: all .5s ease
            }

            .form-signup-left {
                transform: translateX(-399px);
                opacity: 1
            }

            .form-signup-down {
                top: 0px;
                opacity: 0
            }

            input {
                outline: none;
                border: none
            }

            textarea {
                outline: none;
                border: none
            }

            textarea:focus,
            input:focus {
                border-color: transparent !important
            }

            input:focus::-webkit-input-placeholder {
                color: transparent
            }

            input:focus:-moz-placeholder {
                color: transparent
            }

            input:focus::-moz-placeholder {
                color: transparent
            }

            input:focus:-ms-input-placeholder {
                color: transparent
            }

            textarea:focus::-webkit-input-placeholder {
                color: transparent
            }

            textarea:focus:-moz-placeholder {
                color: transparent
            }

            textarea:focus::-moz-placeholder {
                color: transparent
            }

            textarea:focus:-ms-input-placeholder {
                color: transparent
            }

            input::-webkit-input-placeholder {
                color: #adadad
            }

            input:-moz-placeholder {
                color: #adadad
            }

            input::-moz-placeholder {
                color: #adadad
            }

            input:-ms-input-placeholder {
                color: #adadad
            }

            textarea::-webkit-input-placeholder {
                color: #adadad
            }

            textarea:-moz-placeholder {
                color: #adadad
            }

            textarea::-moz-placeholder {
                color: #adadad
            }

            textarea:-ms-input-placeholder {
                color: #adadad
            }

            button {
                outline: none !important;
                border: none;
                background: transparent
            }

            button:hover {
                cursor: pointer
            }

            iframe {
                border: none !important
            }

            .txt1 {
                font-family: Poppins-Regular;
                font-size: 13px;
                color: #666666;
                line-height: 1.5
            }

            .txt2 {
                font-family: Poppins-Regular;
                font-size: 13px;
                color: #333333;
                line-height: 1.5
            }

            .p-t-115 {
                padding-top: 40px
            }

            .p-b-48 {
                padding-bottom: 35px
            }
        
            .wrap-input100 {
                width: 100%;
                position: relative;
                border-bottom: 2px solid #adadad;
                margin-bottom: 37px
            }

            .input100 {
                font-family: Poppins-Regular;
                font-size: 15px;
                color: #555555;
                line-height: 1.2;
                display: block;
                width: 100%;
                height: 45px;
                background: transparent;
                padding: 0 5px
            }

            .bbb-input {
                position: absolute;
                display: block;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none
            }

            .bbb-input::before {
                content: '';
                display: block;
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 0;
                height: 2px;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s;
                background: #6a7dfe;
                background: -webkit-linear-gradient(left, #21d4fd, #b721ff);
                background: -o-linear-gradient(left, #21d4fd, #b721ff);
                background: -moz-linear-gradient(left, #21d4fd, #b721ff);
                background: linear-gradient(left, #21d4fd, #b721ff)
            }

            .bbb-input::after {
                font-family: Poppins-Regular;
                font-size: 15px;
                color: #999999;
                line-height: 1.2;
                content: attr(data-placeholder);
                display: block;
                width: 100%;
                position: absolute;
                top: 16px;
                left: 0px;
                padding-left: 5px;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s
            }

            .input100:focus+.bbb-input::after {
                top: -15px
            }

            .input100:focus+.bbb-input::before {
                width: 100%
            }

            .has-val.input100+.bbb-input::after {
                top: -15px
            }

            .has-val.input100+.bbb-input::before {
                width: 100%
            }

            .btn-show-pass {
                font-size: 15px;
                color: #999999;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                position: absolute;
                height: 100%;
                top: 0;
                right: 0;
                padding-right: 5px;
                cursor: pointer;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s
            }

            .btn-show-pass:hover {
                color: #6a7dfe;
                color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
                color: -o-linear-gradient(left, #21d4fd, #b721ff);
                color: -moz-linear-gradient(left, #21d4fd, #b721ff);
                color: linear-gradient(left, #21d4fd, #b721ff)
            }

            .btn-show-pass.active {
                color: #6a7dfe;
                color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
                color: -o-linear-gradient(left, #21d4fd, #b721ff);
                color: -moz-linear-gradient(left, #21d4fd, #b721ff);
                color: linear-gradient(left, #21d4fd, #b721ff)
            }

            .login-container-form-btn {
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding-top: 13px
            }

            .bb-login-form-btn {
                width: 100%;
                display: block;
                position: relative;
                z-index: 1;
                /*border-radius: 25px;*/
                overflow: hidden;
                margin: 5px auto
            }

            .bb-form-bgbtn {
                position: absolute;
                z-index: -1;
                width: 300%;
                height: 100%;
                background: -webkit-linear-gradient(right, #f9978e, #5bddc7, #f9978e, #f9978e);
                background: -o-linear-gradient(right, #f9978e, #5bddc7, #f9978e, #f9978e);
                background: -moz-linear-gradient(right, #f9978e, #5bddc7, #f9978e, #f9978e);
                background: linear-gradient(right, #f9978e, #5bddc7, #f9978e, #f9978e);
                top: 0;
                left: -100%;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s
            }

            .bb-form-btn {
                font-family: Poppins-Medium;
                font-size: 15px;
                color: #fff;
                line-height: 1.2;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 20px;
                width: 100%;
                height: 40px
            }

            .bb-login-form-btn:hover .bb-form-bgbtn {
                left: 0
            }
            .validate-input {
                position: relative
            }

            .alert-validate::before {
                content: attr(data-validate);
                position: absolute;
                max-width: 70%;
                background-color: #fff;
                border: 1px solid #c80000;
                border-radius: 2px;
                padding: 4px 25px 4px 10px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%);
                right: 0px;
                pointer-events: none;
                font-family: Poppins-Regular;
                color: #c80000;
                font-size: 13px;
                line-height: 1.4;
                text-align: left;
                visibility: hidden;
                opacity: 0;
                -webkit-transition: opacity 0.4s;
                -o-transition: opacity 0.4s;
                -moz-transition: opacity 0.4s;
                transition: opacity 0.4s
            }

            .alert-validate::after {
                content: '\f06a';
                font-family: FontAwesome;
                font-size: 16px;
                color: #c80000;
                display: block;
                position: absolute;
                background-color: #fff;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%);
                right: 5px
            }

            .alert-validate:hover:before {
                visibility: visible;
                opacity: 1
            }

            @media (max-width: 992px) {
                .alert-validate::before {
                    visibility: visible;
                    opacity: 1
                }
            }

            a {
                text-decoration: none !important
            }

            .mdi {
                color: #f2f2f2 !important
            }

            .show_password {
                color: black !important;
                margin-right: 8px
            }

            .line-group{
                margin-top:8%;
                margin-bottom:8%;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .line-text {
                color: #cecece
            }

            .line {
                border-top: 1px solid #eeeff6;
                width: 35%;
                height: 1%;
                margin:auto;

            }
            
            .social-group button {            
                color: #000 !important
            }

            .social-group button:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                outline-width: 0
            }
            .social-group .btn-icon {
                border: 1px solid #ccc;
                background-color: transparent;
                border-radius: 0;
                letter-spacing: 1px;
                width: 42%;
            }

            .social-group .btn-icon:hover {
                background-color: #52B4DB;
                color: #fff !important;
                border: 1px solid #ccc
            }
            .login-facebook .fa {
                padding: 5px 0px 5px 0px;
                font-size: 17px;
                width: 30px;
                text-align: center;
                text-decoration: none;
                margin-right: 5px;
                border-radius: 50%;
            }

            .login-facebook .fa:hover {
                opacity: 0.7;
            }

            .login-facebook .fa-facebook {
                background: #3B5998;
                color: white;
            }

        </style>
        ";
    @endphp        
</div>
@endsection


<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Register') }}</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br />

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br />

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br />

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <br />

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
