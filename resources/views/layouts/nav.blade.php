<!DOCTYPE html>
    <html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Primary Meta Tags -->
        <title>Soul To You</title>
        <meta name="title" content="Soul To You">
        <meta name="description" content="Soul To You">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://digitalhunter.io/">
        <meta property="og:title" content="Soul To You">
        <meta property="og:description" content="Soul To You">
        <meta property="og:image" content="{{ asset('assets/img/bootstrap5.png') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://digitalhunter.io/">
        <meta property="twitter:title" content="Soul To You">
        <meta property="twitter:description" content="Soul To You">
        <meta property="twitter:image" content="{{ asset('assets/img/bootstrap5.png') }}">

        <link rel="icon" href="{{asset('assets/dh.svg')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/packages/fontawesome-free-6.0.0-web/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/packages/slick-1.8.1/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/packages/slick-1.8.1/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('node_modules/colormyar/css/pdf.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/cus.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/home_page.css')}}">
        <link rel="stylesheet" href="{{asset('css/login_alert.css')}}">
        <meta name="theme-color" id="theme" content="#fff">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="{{ asset('js/user.js') }}"></script>
        <link href="{{ asset('css/user.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login_alert.css') }}" rel="stylesheet">
        
        <style>
            .nav li>#nav_home_tab.active,.nav li>#nav_profile_tab.active, .nav .show>.nav-link {
                color: #2CB9C1 !important;

            }
            a{
                text-decoration: none;
            }
        </style>
       </head>
    <body style="background-color:#FFFFFF !important;">
    <div class="container" style="margin-bottom: 150px;">
        <nav class="navbar shadow-lg navbar-expand-lg navbar-light bg-light border-bottom animate__animated fixed-top" style="background-color: #FFFFFF !important;--pdf-shadow: var(--pdf-shadow-colored) !important;
        --pdf-shadow-color: #d4d4d880 !important;width:100% !important;" id="nav_bar" >
            <div class="container">
                <div id="top" style="width:100% !important;">
                    <p id="top_text">
                        Hello! We are Soul to you
                    </p>
                </div>
                
                
                <div class="col-md-12" id="nav_text" style="width:100% !important;">
                    <div id="maker_nav_bar">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin: 0px !important;">
                                <li id="frame_img">
                                    <div style="display: flex;flex-direction: row;align-items: center;padding: 0px;width: 209px;height: 30px;border-radius: 0px;flex: none;order: 0; flex-grow: 0;">
                                        <img src="{{asset('assets/img/soul.svg')}}" alt="">
                                        <a href="{{ url('/') }}" id="soul_to_you"> SOUL TO YOU</a>
                                    </div>
                                </li>
                                <!-- <li style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;position: static;width: 484px;height: 36px;left: 0px;top: 4px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin-left: 380px !important;"> -->
                                <li style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;padding: 0px;margin-left: 40px;width: 853px; height: 44px; border-radius: 0px;flex: none;order: 1;flex-grow: 0;">
                                    
                                        <a id="video" href="{{ url('/artists') }}" style="font-family: 'Poppins';">
                                            ARTISTS <img src="{{asset('assets/img/ep_arrow-down.png')}}" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                        <a id="video" href="{{ url('/videos') }}" style="font-family: 'Poppins';">
                                            VIDEO <img src="{{asset('assets/img/ep_arrow-down.png')}}" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                        <a id="news" href="{{ url('/news') }}" style="font-family: 'Poppins';">
                                            NEWS<img src="{{asset('assets/img/ep_arrow-down.png')}}" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                        <a id="quiz" href="{{ url('/artists') }}" style="font-family: 'Poppins';">
                                            QUIZZES<img src="{{asset('assets/img/ep_arrow-down.png')}}" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                        @guest
                                            @if (Route::has('login'))
                                                <a id="user_profile"
                                                    style="cursor: pointer" 
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#loginModal"
                                                    >{{ __('LOGIN') }}
                                                </a>
                                            @endif

                                        @else
                                            <a id="user_profile">
                                                {{ Auth::user()->name }}                                            
                                            </a>
                                            
                                        @endguest
                                        
                                        <a id="search">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.654 17.595L21.5835 20.523C21.7201 20.6644 21.7957 20.8539 21.794 21.0505C21.7923 21.2472 21.7134 21.4353 21.5744 21.5744C21.4353 21.7134 21.2472 21.7923 21.0505 21.794C20.8539 21.7957 20.6644 21.7201 20.523 21.5835L17.5935 18.654C15.6791 20.2942 13.2039 21.1291 10.6872 20.9836C8.17053 20.8381 5.808 19.7236 4.09537 17.8737C2.38275 16.0239 1.45317 13.5827 1.50169 11.0622C1.5502 8.5418 2.57305 6.13813 4.35559 4.35559C6.13813 2.57305 8.5418 1.5502 11.0622 1.50169C13.5827 1.45317 16.0239 2.38275 17.8737 4.09537C19.7236 5.808 20.8381 8.17053 20.9836 10.6872C21.1291 13.2039 20.2942 15.6791 18.654 17.5935V17.595ZM11.25 19.5C13.438 19.5 15.5365 18.6308 17.0836 17.0836C18.6308 15.5365 19.5 13.438 19.5 11.25C19.5 9.06196 18.6308 6.96354 17.0836 5.41637C15.5365 3.86919 13.438 3 11.25 3C9.06196 3 6.96354 3.86919 5.41637 5.41637C3.86919 6.96354 3 9.06196 3 11.25C3 13.438 3.86919 15.5365 5.41637 17.0836C6.96354 18.6308 9.06196 19.5 11.25 19.5V19.5Z" fill="#A1A6AD"/>
                                        </svg>                                        
                                        <a id="menu_right_alt">
                                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 28H33V25H6V28ZM6 20.5H33V17.5H6V20.5ZM6 10V13H33V10H6Z" fill="#2CB9C1"/>
                                            </svg>
                                            
                                        </a>
                                    
                                    <!-- <a class="dropdown-toggle" href="#" role="button" id="video" data-bs-toggle="dropdown" aria-expanded="false">                                        
                                        Video
                                    </a> -->
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="position: absolute;width: 1440px;height: auto;top: 176px;background: #FFFFFF;margin-bottom: 112px;">
        @yield('usercontent')  
    </div>

    <footer class="page-footer bg-light text-center text-lg-start mt-5" style="margin-top: 2400px !important;" id="footer">
        <div class="container margin_60_35" id="footer_container">
            <div id="footer_frame">
                <div class="collapse navbar-collapse" id="column_3">
                    <p style="margin: 10px 48px;" id="resources">COMPANY</p>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav_link_1">
                        <li class="nav-item">
                            <p class="nav-link active" aria-current="page" id="Testimonial" href="#">About</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link" href="#" id="Support">Facebook</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link " href="#" id="Terms">Instagram</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link" href="#" id="Privacy">Twitter</p>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="column_2">
                    <p style="margin: 10px 48px;" id="resources">HELP</p>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav_link_1">
                        <li class="nav-item">
                            <p class="nav-link active" aria-current="page" id="Testimonial" href="#">Contact us</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link" href="#" id="Support">About us</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link " href="#" id="Terms">Features</p>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="column_1">
                    <p style="margin: 10px 48px;" id="resources">RESOURCES</p>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav_link_1">
                        <li class="nav-item">
                            <p class="nav-link active" aria-current="page" id="Testimonial" href="#">Testimonial</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link" href="#" id="Support">Support</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link " href="#" id="Terms">Terms</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link" href="#" id="Privacy">Privacy</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_column">
                <svg width="48" height="38" viewBox="0 0 48 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.9059 33.9179H47.9999V36.0126H41.414V22.8408H43.9059V33.9179Z" fill="#636B78"/>
                    <path d="M30.5327 22.8408V30.912C30.5327 31.7964 30.759 32.4752 31.2116 32.9485C31.6643 33.4094 32.3004 33.6398 33.12 33.6398C33.9519 33.6398 34.5941 33.4094 35.0467 32.9485C35.4994 32.4752 35.7257 31.7964 35.7257 30.912V22.8408H38.313V30.8934C38.313 32.0019 38.0744 32.9423 37.5973 33.7145C37.1325 34.4743 36.5025 35.0473 35.7073 35.4334C34.9244 35.8195 34.0497 36.0126 33.0833 36.0126C32.1291 36.0126 31.2606 35.8195 30.4776 35.4334C29.707 35.0473 29.0953 34.4743 28.6427 33.7145C28.19 32.9423 27.9637 32.0019 27.9637 30.8934V22.8408H30.5327Z" fill="#636B78"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.2646 20.5162C31.7017 20.5162 27.192 16.0065 27.192 10.4436C27.192 4.88073 31.7017 0.371099 37.2646 0.371099C42.8275 0.371099 47.3371 4.88073 47.3371 10.4436C47.3371 16.0065 42.8275 20.5162 37.2646 20.5162ZM37.2645 15.48C34.483 15.48 32.2282 13.2252 32.2282 10.4437C32.2282 7.6623 34.483 5.40749 37.2645 5.40749C40.0459 5.40749 42.3007 7.6623 42.3007 10.4437C42.3007 13.2252 40.0459 15.48 37.2645 15.48Z" fill="url(#paint0_linear_2_680)"/>
                    <path d="M13.1582 37.562C10.6991 37.562 8.47569 37.1285 6.48813 36.2616C4.53426 35.3947 2.98464 34.1463 1.83927 32.5165C0.693895 30.8867 0.104366 28.9621 0.0706787 26.7428H7.65034C7.75141 28.2339 8.25672 29.4129 9.16628 30.2799C10.1095 31.1468 11.3896 31.5802 13.0066 31.5802C14.6573 31.5802 15.9543 31.1814 16.8975 30.3839C17.8408 29.5516 18.3124 28.4767 18.3124 27.1589C18.3124 26.084 17.9924 25.1997 17.3523 24.5062C16.7123 23.8126 15.9038 23.2751 14.9268 22.8937C13.9836 22.4776 12.6698 22.0268 10.9854 21.5413C8.69465 20.8478 6.825 20.1716 5.37644 19.5127C3.96157 18.8192 2.73198 17.7962 1.68767 16.4438C0.677052 15.0567 0.171741 13.2189 0.171741 10.9302C0.171741 8.78022 0.693896 6.90767 1.73821 5.31254C2.78251 3.71741 4.24792 2.50372 6.13441 1.67148C8.0209 0.804556 10.1769 0.371094 12.6024 0.371094C16.2406 0.371094 19.1883 1.29003 21.4453 3.1279C23.7361 4.93109 24.9994 7.4625 25.2352 10.7221H17.4534C17.386 9.47376 16.8638 8.45079 15.8869 7.65323C14.9437 6.82098 13.6804 6.40486 12.0971 6.40486C10.7159 6.40486 9.60421 6.76897 8.76203 7.49718C7.95353 8.22539 7.54928 9.28304 7.54928 10.6701C7.54928 11.6411 7.85247 12.456 8.45884 13.1148C9.0989 13.739 9.87371 14.2592 10.7833 14.6753C11.7265 15.0567 13.0403 15.5075 14.7247 16.0277C17.0154 16.7212 18.8851 17.4148 20.3336 18.1083C21.7822 18.8018 23.0286 19.8421 24.0729 21.2292C25.1173 22.6163 25.6394 24.4368 25.6394 26.6908C25.6394 28.6327 25.1509 30.4359 24.174 32.1004C23.1971 33.7649 21.7654 35.0999 19.8789 36.1056C17.9924 37.0765 15.7522 37.562 13.1582 37.562Z" fill="url(#paint1_linear_2_680)"/>
                    <defs>
                    <linearGradient id="paint0_linear_2_680" x1="24.1607" y1="0.371094" x2="24.1607" y2="37.562" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#63D8CF"/>
                    <stop offset="1" stop-color="#8CB5F7"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_2_680" x1="12.855" y1="0.371094" x2="12.855" y2="37.562" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFA49B"/>
                    <stop offset="1" stop-color="#A2F0E3"/>
                    </linearGradient>
                    </defs>
                    </svg>
                    <a id="soul_to_you_2"> SOUL TO YOU</a>
                <p id="footer_text">Making the world a better place</p>
                <h4 id="footer_social">
                    <a href="https://www.facebook.com/wingsnwheelstours/" target="_blank" id="facebook">
                        <img src="{{asset('assets/img/footer/ci_facebook.svg')}}" alt="">                       
                    </a>
                    <a href="https://www.instagram.com/wingsandwheelstravels/" target="_blank" id="instagram">
                        <img src="{{asset('assets/img/footer/bxl_instagram-alt.svg')}}" alt="">
                    </a>
                    <a href=https://www.youtube.com/channel/UC-80UCUh2R4QPpsK2ys5bnQ?view_as=subscriber" target="_blank;" id="twitter">
                        <img src="{{asset('assets/img/footer/akar-icons_twitter-fill.svg')}}" alt="">
                    </a>
                </h4>
            </div>
        </div>
    </footer>
    

    <footer class="bg-light text-center text-lg-start" id="footer_copyright">
        <div class="text-center" id="copy_right">
            © 2022 SOUL TO YOU, Inc. All rights reserved.
        </div>
    </footer>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/waypoints/lib/noframework.waypoints.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/packages/slick-1.8.1/slick/slick.min.js')}}"></script>
    <script src="{{asset('node_modules/scrollreveal/dist/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/JS/cus.js')}}"></script>
    <script>

        // window.addEventListener('load', _ => {
        //     document.querySelector('.loading').style.display = "none";
        // })


        ScrollReveal().reveal('.headline',{
            origin: 'bottom',
            distance: '300px',
            duration: 2000,
            reset: true,
            interval: 200,
            scale: 0.80,
            viewFactor: 0.2,
        });

        $('.music_album').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
       
        $('.solo_image').slick({
            dots: false,
            infinite: true,
            speed: 600,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <!-- For Login Alert-->
    @php
            echo "
            <link href='css/login_alert.css' rel='stylesheet'> 
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    </html>