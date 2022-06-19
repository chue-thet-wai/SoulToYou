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
        <meta property="og:image" content="{{asset('assets/img/bootstrap5.png')}}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://digitalhunter.io/">
        <meta property="twitter:title" content="Soul To You">
        <meta property="twitter:description" content="Soul To You">
        <meta property="twitter:image" content="{{asset('assets/img/bootstrap5.png')}}">

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
        <style>
            .nav li>#nav_home_tab.active,.nav li>#nav_profile_tab.active, .nav .show>.nav-link {
                color: #2CB9C1 !important;

            }
            a{
                text-decoration: none;
            }
        </style>
       </head>
    <body>
    <div class="container" style="margin-bottom: 150px;">
        <nav class="navbar shadow-lg navbar-expand-lg navbar-light bg-light border-bottom animate__animated fixed-top" style="background-color: #FFFFFF !important;--pdf-shadow: var(--pdf-shadow-colored) !important;
        --pdf-shadow-color: #d4d4d880 !important;" id="nav_bar" >
            <div class="container">
                <div id="top">
                    <p id="top_text">
                        Hello! We are Soul to you
                    </p>
                </div>
                
                
                <div class="col-md-12" id="nav_text">
                    <div id="maker_nav_bar">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin: 0px !important;">
                                <li id="frame_img">
                                    <div style="display: flex;flex-direction: row;align-items: center;padding: 0px;width: 209px;height: 30px;border-radius: 0px;flex: none;order: 0; flex-grow: 0;">
                                        <img src="{{asset('assets/img/soul.svg')}}" alt="">
                                        <a id="soul_to_you"> SOUL TO YOU</a>
                                    </div>
                                </li>
                                <li style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;padding: 0px;margin-left: 40px;width: 853px; height: 44px; border-radius: 0px;flex: none;order: 1;flex-grow: 0;">
                                    <a id="artists" href="{{ url('/artists') }}">
                                        <svg width="121" height="36" viewBox="0 0 121 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.928 22.808H5.256L4.152 26H0.624L6.648 9.224H10.56L16.584 26H13.032L11.928 22.808ZM11.016 20.12L8.592 13.112L6.168 20.12H11.016ZM27.4757 26L23.7797 19.472H22.1957V26H18.8357V9.248H25.1237C26.4197 9.248 27.5237 9.48 28.4357 9.944C29.3477 10.392 30.0277 11.008 30.4757 11.792C30.9397 12.56 31.1717 13.424 31.1717 14.384C31.1717 15.488 30.8517 16.488 30.2117 17.384C29.5717 18.264 28.6197 18.872 27.3557 19.208L31.3637 26H27.4757ZM22.1957 16.952H25.0037C25.9157 16.952 26.5957 16.736 27.0437 16.304C27.4917 15.856 27.7157 15.24 27.7157 14.456C27.7157 13.688 27.4917 13.096 27.0437 12.68C26.5957 12.248 25.9157 12.032 25.0037 12.032H22.1957V16.952ZM45.6107 9.248V11.96H41.1467V26H37.7867V11.96H33.3227V9.248H45.6107ZM51.4223 9.248V26H48.0623V9.248H51.4223ZM60.5259 26.168C59.3579 26.168 58.3019 25.968 57.3579 25.568C56.4299 25.168 55.6939 24.592 55.1499 23.84C54.6059 23.088 54.3259 22.2 54.3099 21.176H57.9099C57.9579 21.864 58.1979 22.408 58.6299 22.808C59.0779 23.208 59.6859 23.408 60.4539 23.408C61.2379 23.408 61.8539 23.224 62.3019 22.856C62.7499 22.472 62.9739 21.976 62.9739 21.368C62.9739 20.872 62.8219 20.464 62.5179 20.144C62.2139 19.824 61.8299 19.576 61.3659 19.4C60.9179 19.208 60.2939 19 59.4939 18.776C58.4059 18.456 57.5179 18.144 56.8299 17.84C56.1579 17.52 55.5739 17.048 55.0779 16.424C54.5979 15.784 54.3579 14.936 54.3579 13.88C54.3579 12.888 54.6059 12.024 55.1019 11.288C55.5979 10.552 56.2939 9.992 57.1899 9.608C58.0859 9.208 59.1099 9.008 60.2619 9.008C61.9899 9.008 63.3899 9.432 64.4619 10.28C65.5499 11.112 66.1499 12.28 66.2619 13.784H62.5659C62.5339 13.208 62.2859 12.736 61.8219 12.368C61.3739 11.984 60.7739 11.792 60.0219 11.792C59.3659 11.792 58.8379 11.96 58.4379 12.296C58.0539 12.632 57.8619 13.12 57.8619 13.76C57.8619 14.208 58.0059 14.584 58.2939 14.888C58.5979 15.176 58.9659 15.416 59.3979 15.608C59.8459 15.784 60.4699 15.992 61.2699 16.232C62.3579 16.552 63.2459 16.872 63.9339 17.192C64.6219 17.512 65.2139 17.992 65.7099 18.632C66.2059 19.272 66.4539 20.112 66.4539 21.152C66.4539 22.048 66.2219 22.88 65.7579 23.648C65.2939 24.416 64.6139 25.032 63.7179 25.496C62.8219 25.944 61.7579 26.168 60.5259 26.168ZM80.7669 9.248V11.96H76.3029V26H72.9429V11.96H68.4789V9.248H80.7669ZM89.0025 26.168C87.8345 26.168 86.7785 25.968 85.8345 25.568C84.9065 25.168 84.1705 24.592 83.6265 23.84C83.0825 23.088 82.8025 22.2 82.7865 21.176H86.3865C86.4345 21.864 86.6745 22.408 87.1065 22.808C87.5545 23.208 88.1625 23.408 88.9305 23.408C89.7145 23.408 90.3305 23.224 90.7785 22.856C91.2265 22.472 91.4505 21.976 91.4505 21.368C91.4505 20.872 91.2985 20.464 90.9945 20.144C90.6905 19.824 90.3065 19.576 89.8425 19.4C89.3945 19.208 88.7705 19 87.9705 18.776C86.8825 18.456 85.9945 18.144 85.3065 17.84C84.6345 17.52 84.0505 17.048 83.5545 16.424C83.0745 15.784 82.8345 14.936 82.8345 13.88C82.8345 12.888 83.0825 12.024 83.5785 11.288C84.0745 10.552 84.7705 9.992 85.6665 9.608C86.5625 9.208 87.5865 9.008 88.7385 9.008C90.4665 9.008 91.8665 9.432 92.9385 10.28C94.0265 11.112 94.6265 12.28 94.7385 13.784H91.0425C91.0105 13.208 90.7625 12.736 90.2985 12.368C89.8505 11.984 89.2505 11.792 88.4985 11.792C87.8425 11.792 87.3145 11.96 86.9145 12.296C86.5305 12.632 86.3385 13.12 86.3385 13.76C86.3385 14.208 86.4825 14.584 86.7705 14.888C87.0745 15.176 87.4425 15.416 87.8745 15.608C88.3225 15.784 88.9465 15.992 89.7465 16.232C90.8345 16.552 91.7225 16.872 92.4105 17.192C93.0985 17.512 93.6905 17.992 94.1865 18.632C94.6825 19.272 94.9305 20.112 94.9305 21.152C94.9305 22.048 94.6985 22.88 94.2345 23.648C93.7705 24.416 93.0905 25.032 92.1945 25.496C91.2985 25.944 90.2345 26.168 89.0025 26.168Z" fill="#2CB9C1"/>
                                            <circle cx="111" cy="18" r="10" fill="url(#paint0_linear_2_751)"/>
                                            <path d="M105.778 15.7455L105.778 15.7455L105.777 15.746C105.691 15.8258 105.622 15.9226 105.573 16.0314C105.525 16.1402 105.5 16.2581 105.5 16.3779C105.5 16.4977 105.525 16.6156 105.573 16.7245C105.622 16.8333 105.691 16.93 105.777 17.0099L105.778 17.0107L110.359 21.2508L110.359 21.2509C110.535 21.4132 110.765 21.5 111 21.5C111.234 21.5 111.464 21.4132 111.64 21.2509L111.64 21.2509L116.221 17.0118C116.221 17.0117 116.221 17.0117 116.221 17.0116C116.221 17.0116 116.221 17.0116 116.221 17.0116C116.307 16.9317 116.378 16.8348 116.426 16.7258C116.475 16.6166 116.5 16.4982 116.5 16.3779C116.5 16.2576 116.475 16.1393 116.426 16.0301C116.378 15.921 116.307 15.824 116.221 15.7441C116.049 15.585 115.824 15.5 115.594 15.5C115.364 15.5 115.138 15.5852 114.966 15.7446L114.806 15.893V15.8936L111 19.4158L107.033 15.7455C107.033 15.7454 107.033 15.7453 107.033 15.7452C107.033 15.7452 107.033 15.7452 107.033 15.7451C106.861 15.5859 106.635 15.5008 106.405 15.5008C106.175 15.5008 105.95 15.586 105.778 15.7455Z" fill="white" stroke="white"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_751" x1="100.966" y1="8.05055" x2="124.938" y2="10.173" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F9978E"/>
                                                    <stop offset="1" stop-color="#5BDDC7"/>
                                            </linearGradient>
                                            </defs>
                                            </svg>
                                            <!-- ARTISTS -->
                                            
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
                                            <a id="user_profile" style="font-size: 15px !important;">
                                                <img class="user-avatar rounded-circle" src="{{asset('images/user_logo.png')}}" alt="User Avatar" style="width: 20%;height: 80%;margin-right: 5%;">
                                                {{ Auth::user()->name }}                                        
                                            </a>
                                            
                                        @endguest
                                        
                                        <a id="search">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.654 17.595L21.5835 20.523C21.7201 20.6644 21.7957 20.8539 21.794 21.0505C21.7923 21.2472 21.7134 21.4353 21.5744 21.5744C21.4353 21.7134 21.2472 21.7923 21.0505 21.794C20.8539 21.7957 20.6644 21.7201 20.523 21.5835L17.5935 18.654C15.6791 20.2942 13.2039 21.1291 10.6872 20.9836C8.17053 20.8381 5.808 19.7236 4.09537 17.8737C2.38275 16.0239 1.45317 13.5827 1.50169 11.0622C1.5502 8.5418 2.57305 6.13813 4.35559 4.35559C6.13813 2.57305 8.5418 1.5502 11.0622 1.50169C13.5827 1.45317 16.0239 2.38275 17.8737 4.09537C19.7236 5.808 20.8381 8.17053 20.9836 10.6872C21.1291 13.2039 20.2942 15.6791 18.654 17.5935V17.595ZM11.25 19.5C13.438 19.5 15.5365 18.6308 17.0836 17.0836C18.6308 15.5365 19.5 13.438 19.5 11.25C19.5 9.06196 18.6308 6.96354 17.0836 5.41637C15.5365 3.86919 13.438 3 11.25 3C9.06196 3 6.96354 3.86919 5.41637 5.41637C3.86919 6.96354 3 9.06196 3 11.25C3 13.438 3.86919 15.5365 5.41637 17.0836C6.96354 18.6308 9.06196 19.5 11.25 19.5V19.5Z" fill="#A1A6AD"/>
                                        </svg>                                        
                                        <!--<a id="menu_right_alt">

                                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 28H33V25H6V28ZM6 20.5H33V17.5H6V20.5ZM6 10V13H33V10H6Z" fill="#2CB9C1"/>
                                            </svg>                                            
                                        </a>-->
                                        <ul class="nav navbar-nav ms-auto" id="menu_right_alt" style="height:85px !important;">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 28H33V25H6V28ZM6 20.5H33V17.5H6V20.5ZM6 10V13H33V10H6Z" fill="#2CB9C1"/>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Reports</a>
                                                    <a href="#" class="dropdown-item">Settings</a>
                                                    <div class="dropdown-divider"></div>
                                                        <img src="assets/img/save_news/air-ballon.png" style="width: 24px;height: 24px;flex: none;order: 0;flex-grow: 0;" alt="">
                                                        My Favourites
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ url('/saved_news') }}" class="dropdown-item">Saved News</a>
                                                    <a href="{{ url('/saved_videos') }}" class="dropdown-item">Saved Videos</a>
                                                    <a href="{{ url('/saved_artists') }}" class="dropdown-item">Saved Artists</a>
                                                    <a href="{{ url('/saved_bands') }}" class="dropdown-item">Saved Bands</a>

                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ url('/logout') }}" class="dropdown-item">Logout</a>
                                                </div>
                                            </li>
                                        </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="container" style="position: absolute;width: 1130px;left: 156px;background: #FFFFFF;">
        <div class="col-md-12">
            <div class="row">
                <ol class="breadcrumb float-sm-right">
                    <li id="Home"><a href="{{url('/')}}" style="color: #636B78 !important;">Home </a></li><svg style="margin-top: 7px" width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.99868 11.3549C1.0863 11.4005 1.18468 11.4213 1.28326 11.4152C1.38184 11.4091 1.47689 11.3763 1.55822 11.3202L8.59989 6.44524C8.67184 6.39539 8.73064 6.32885 8.77126 6.2513C8.81187 6.17376 8.83308 6.08753 8.83308 5.99999C8.83308 5.91246 8.81187 5.82623 8.77126 5.74868C8.73064 5.67114 8.67184 5.60459 8.59989 5.55474L1.55822 0.679744C1.47705 0.623116 1.38188 0.589859 1.28311 0.583601C1.18433 0.577343 1.08573 0.598324 0.998058 0.644255C0.910386 0.690187 0.837007 0.759306 0.78592 0.844078C0.734834 0.92885 0.708001 1.02602 0.708347 1.12499V10.875C0.708331 10.9739 0.735378 11.0709 0.786557 11.1555C0.837736 11.2401 0.911094 11.309 0.99868 11.3549ZM1.79168 2.15904L7.33997 5.99999L1.79168 9.84095V2.15904Z" fill="#636B78"/>
                        </svg>
                    
                    <li id="Artists"><a href="{{url('/artists')}}" style="color: #636B78 !important;">Artists </a><svg style="margin-left: 10px;" width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.99868 11.3549C1.0863 11.4005 1.18468 11.4213 1.28326 11.4152C1.38184 11.4091 1.47689 11.3763 1.55822 11.3202L8.59989 6.44524C8.67184 6.39539 8.73064 6.32885 8.77126 6.2513C8.81187 6.17376 8.83308 6.08753 8.83308 5.99999C8.83308 5.91246 8.81187 5.82623 8.77126 5.74868C8.73064 5.67114 8.67184 5.60459 8.59989 5.55474L1.55822 0.679744C1.47705 0.623116 1.38188 0.589859 1.28311 0.583601C1.18433 0.577343 1.08573 0.598324 0.998058 0.644255C0.910386 0.690187 0.837007 0.759306 0.78592 0.844078C0.734834 0.92885 0.708001 1.02602 0.708347 1.12499V10.875C0.708331 10.9739 0.735378 11.0709 0.786557 11.1555C0.837736 11.2401 0.911094 11.309 0.99868 11.3549ZM1.79168 2.15904L7.33997 5.99999L1.79168 9.84095V2.15904Z" fill="#FF614E"/>
                        </svg>
                         </li>
                    <li id="Details"> Details</li>
                </ol>
            </div>      
        </div>
    </div>
    
    <div class="container" style="width: 1440px;">
        <div class="col-md-12" style="margin-left: 32px;">
            <div class="row">
                <div class="mt-5" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;position: static;width: 744px;height: 766px;left: 156px;top: 0px;flex: none;order: 0;flex-grow: 0;margin: 0px 24px;">
                    <img src="{{asset('bands_images/'.$band_detail_res[0]->main_image)}}" style="width: 100%;height: 298px;left:0px;top:0px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                    </img>
                    <div style="background-color: rgb(0,0,0);background-color: rgba(0,0,0, 0.4);color: white;font-weight: bold;background: linear-gradient(90deg, rgba(44, 185, 193, 0.6) 0%, rgba(0, 0, 0, 0) 74.13%);position: static;transform: translate(0%, -100%);z-index: 2;width: 100%;height: 100px;text-align: center;">    
                        <div class="row">
                            <div class="col-md-12" style="height: 60px;">
                                <p style="position: static;width: 108px;height: 36px;left: 24px;top: 7px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 20px;line-height: 36px;color: #FBFBFB;flex: none;order: 0;flex-grow: 0;margin: 16px 24px;"> BLACKPINK </p>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-1" style="margin-left:20px;width: 34px;height:34px;">
                                        <img src="{{asset('assets/img/subscribe.png')}}" alt="" style="width: 34px;height:34px;">
                                    </div>
                                    <div class="col-md-3" style="margin-top: 7px;">
                                        <p style="position: static;width: 151px;height: 28px;top: 3px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #FBFBFB;flex: none;order: 1;flex-grow: 0;margin-right:8px;">
                                            {{$band_detail_res[0]->twitter_subscriber}} Subscriberes
                                        </p>
                                    </div>
                                    <div class="col-md-1" style="margin-left:14px;width: 34px;height:34px;">
                                        <img src="{{asset('assets/img/ant.png')}}" alt="" style="width: 34px;height:34px;">
                                    </div>
                                    <div class="col-md-3" style="margin-top: 7px;">
                                        <p style="position: static;width: 151px;height: 28px;top: 3px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #FBFBFB;flex: none;order: 1;flex-grow: 0;margin-right:8px;">
                                            {{$band_detail_res[0]->instagram_subscriber}} Subscriberes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <ul class="nav" style="margin-left: 50px;margin-right: 10px;display: flex;flex-direction: row;align-items: flex-start;padding: 0px;position: static;width: 445px;height: 24px;left: 10px;top: 10px;flex: none;order: 0;flex-grow: 0;;">
                                <li class="nav-item">
                                  <a class="nav-link active" id="nav_home_tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" href="#" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;position: static;width: 196px;height: 24px;left: 0px;top: 0px;flex: none;order: 0;flex-grow: 0;font-family: 'Poppins';font-style: normal;
                                    font-weight: 600;font-size: 18px;line-height: 24px;color: #A1A6AD;margin-right: 60px">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V5C11 4.44771 11.4477 4 12 4C12.5523 4 13 4.44771 13 5V13Z" fill="#A1A6AD"/>
                                        <path d="M6.70711 11.2929C6.31658 10.9024 5.68342 10.9024 5.29289 11.2929C4.90237 11.6834 4.90237 12.3166 5.29289 12.7071L11.2929 18.7071C11.6715 19.0857 12.2811 19.0989 12.6757 18.7372L18.6757 13.2372C19.0828 12.864 19.1103 12.2314 18.7372 11.8243C18.364 11.4172 17.7314 11.3897 17.3243 11.7628L12.0301 16.6159L6.70711 11.2929Z" fill="#A1A6AD"/>
                                        </svg>
                                        Current Members
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav_profile_tab" data-bs-toggle="tab" data-bs-target="#nav-profile" role="tab" aria-controls="nav-pro#nav-profile" aria-selected="true" href="#" 
                                        style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;position: static;width: 187px;height: 24px;left: 258px;top: 0px;flex: none;order: 1;flex-grow: 0;font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 24px;color: #A1A6AD;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M13 11C13 10.4477 12.5523 10 12 10C11.4477 10 11 10.4477 11 11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V11Z" fill="#2CB9C1"/>
                                            <path d="M6.70711 12.7071C6.31658 13.0976 5.68342 13.0976 5.29289 12.7071C4.90237 12.3166 4.90237 11.6834 5.29289 11.2929L11.2929 5.29289C11.6715 4.91432 12.2811 4.90107 12.6757 5.26285L18.6757 10.7628C19.0828 11.136 19.1103 11.7686 18.7372 12.1757C18.364 12.5828 17.7314 12.6103 17.3243 12.2372L12.0301 7.38414L6.70711 12.7071Z" fill="#2CB9C1"/>
                                            </svg>
                                            
                                            Former Member
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="col-md-12" style="padding-left: 50px;padding-right:10px;margin-top: 30px;">
                                    @foreach($current_members as $m)
                                        <div class="row" style="margin-left: -30px !important;margin: 10px 0px;">
                                            <div class="col-md-4" style="box-sizing: border-box;position: static;width: 64px;height: 64px;left: 0px;top: 4px;background: #FFFFFF;margin: 0px 8px;">
                                                <img src="{{asset('artists_images/'.$m->main_image)}}" style="width: 64px;height: 64px;background-position: center;background-repeat: no-repeat;background-size: cover;border: 2px solid #E1E9F1;border-radius: 78px;flex: none;order: 0;flex-grow: 0;"></img>
                                            </div>
                                            <div class="col-md-4" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;position: static;width: 148px !important;height: 60px;left: 72px;top: 6px;flex: none;order: 1;margin: 0px 8px;">
                                                <p style="position: static;height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 14px;line-height: 28px; margin-left: 0%;color: #000000;margin: 4px 0px;">
                                                    {{$m->name}} ({{$m->korea_name}})
                                                </p>
                                                @php 
                                                $joined_date="";
                                                if($m->joined_date){
                                                    $joined_date=date('Y-m-d',strtotime($m->joined_date));
                                                }
                                                @endphp
                                                <div style="display: flex;flex-direction: row;align-items: center;padding: 0px;position: static;width: 168px;height: 28px;left: 0px;flex: none;margin: 4px 0px;">
                                                    <p style="position: static; height: 28px;font-family: 'Poppins';font-weight: 300;font-size: 12px;line-height: 18px;color: #636B78;;flex: none;order: 0;flex-grow: 0; margin-top: 8px;margin-bottom: 8px;margin-left: 0% !important;">
                                                        JOINED > {{$joined_date}} 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;position: static;width: 148px !important;height: 60px;left: 72px;order: 1;margin-top: 20px;">
                                                <i class="fa-solid fa-ellipsis-vertical" style="color:#636B78"></i>
                                            </div>
                                        </div>
                                    @endforeach    
                                        
                                    </div>
                                </div>
                                
                                @php if( count($old_members) >1 ) { @endphp
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="col-md-12" style="padding-left:25px;padding-right:30px">
                                            @foreach($old_members as $m)
                                                <div class="row" style="margin-left: -30px !important;margin: 10px 0px;">
                                                    <div class="col-md-4" style="box-sizing: border-box;position: static;width: 64px;height: 64px;left: 0px;top: 4px;background: #FFFFFF;border: 2px solid #E1E9F1;border-radius: 78px;flex: none;order: 0;flex-grow: 0;margin: 0px 8px;
                                                    background-image: '{{asset('artists_images/'.$m->main_image)}}';background-position: center;background-repeat: no-repeat;background-size: cover;">
                                                    </div>
                                                    <div class="col-md-4" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;position: static;width: 148px !important;height: 60px;left: 72px;top: 6px;flex: none;order: 1;margin: 0px 8px;">
                                                        <p style="position: static;height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 14px;line-height: 28px; margin-left: 0%;color: #000000;margin: 4px 0px;">
                                                            {{$m->name}} ({{$m->korea_name}})
                                                        </p>
                                                        @php 
                                                        $joined_date="";
                                                        if($m->joined_date){
                                                            $joined_date=date('Y-m-d',strtotime($m->joined_date));
                                                        }
                                                        @endphp
                                                        <div style="display: flex;flex-direction: row;align-items: center;padding: 0px;position: static;width: 168px;height: 28px;left: 0px;flex: none;margin: 4px 0px;">
                                                            <p style="position: static; height: 28px;font-family: 'Poppins';font-weight: 300;font-size: 12px;line-height: 18px;color: #636B78;;flex: none;order: 0;flex-grow: 0; margin-top: 8px;margin-bottom: 8px;margin-left: 0% !important;">
                                                                JOINED > {{$joined_date}} 
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;position: static;width: 148px !important;height: 60px;left: 72px;order: 1;margin-top: 20px;">
                                                        <i class="fa-solid fa-ellipsis-vertical" style="color:#636B78"></i>
                                                    </div>
                                                </div>
                                            @endforeach   
                                            </div>
                                        </div>
                                
                                @php }else{ @endphp
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="col-md-12" style="padding-left:25px;padding-right:30px">
                                            <div id="hor" style="text-align: center;">
                                                <img src="{{asset('assets/img/Flower.gif')}}" alt="" style="width: 150px;height:150px;margin-top: 10%;">
                                                <p style="color: #636B78 !important;">အဖွဲ့မှထွက်ခွာသည့်သူ မရှိသေးပါ</p>
                                            </div>
                                        </div>
                                    </div>
                                @php } @endphp
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5" id="" style="box-sizing: border-box;display: flex;flex-direction: column;align-items: flex-start;padding: 24px;position: static;width: 340px !important;height: 639px;left: 924px;top: 0px;overflow-y: scroll;background: #FFFFFF;border: 0.8px solid #D1D4D6;flex: none;order: 1;flex-grow: 0;">
                    <p id="black_pink">{{$band_detail_res[0]->name}}</p>
                    <p id="about" style="width: 100% !important;">About</p>
                    <p id="first_page">
                        {{$band_detail_res[0]->about}}
                    </p>
                    <!--<p id="second_page">
                        Blackpink (Korean: 블랙핑크; commonly stylized as BLACKPINK or BLΛƆKPIИK) is a South Korean girl group formed by YG Entertainment, consisting of members Jisoo, Jennie, Rosé, and Lisa. The group debuted in August 2016 with their single album Square One, which featured "Whistle" and "Boombayah", their first number-one entries on South Korea's Gaon Digital Chart and the Billboard World Digital Song Sales chart, respectively.
                    </p>-->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12">
            <div class="row" style="margin-left:30px !important;width: 1103.15px !important;">
                <div class="col-md-12">
                    <p style="color: #2CB9C1;font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 36px;">Released Videos
                </p>
                <p style="width: 121px;height: 3px;background: linear-gradient(95.06deg, #F9978E -0.14%, #5BDDC7 110.84%);
                    border-radius: 0px 14px;transform: rotate(-180deg);"></p>
                </div>
                
                @php 
                    $i=0; 
                    $video_count=count($video_list);
                    if($video_count>6){
                        $video_count=6;
                    }else{
                        $video_count=$video_count-1;
                    }
                @endphp
                @while ($i<$video_count)  
                <div style="width:396.57px;height:366px;margin:0px 0px;margin-bottom: 12px;">
                    <div class="card" id="card">
                        <div class="card-body" id="card_body" style="text-align: center;padding:0px !important;">
                            <!--<svg width="94" style="margin-top: 50px;" height="94" viewBox="0 0 94 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M16.5388 15.6667L77.694 15.6667C83.767 15.6667 88.8394 20.2946 89.3947 26.3421C89.8538 31.3412 90.0834 36.8211 90.0834 42.7821C90.0834 49.7611 89.7687 56.741 89.1394 63.7217H89.1394C88.5935 69.7776 83.5174 74.4167 77.4369 74.4167L16.5388 74.4167C10.4745 74.4167 5.40644 69.8017 4.84012 63.764C4.22448 57.2003 3.91666 50.9596 3.91666 45.0417C3.91666 39.1238 4.22448 32.883 4.84012 26.3194L4.84013 26.3194C5.40645 20.2817 10.4745 15.6667 16.5388 15.6667Z" fill="#F06C5C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M43.7968 57.9874L61.0436 46.1982C61.9365 45.5879 62.1656 44.3693 61.5552 43.4764C61.4191 43.2772 61.2472 43.1048 61.0484 42.968L43.8015 31.1045C42.9104 30.4915 41.6912 30.717 41.0782 31.6081C40.8536 31.9347 40.7333 32.3217 40.7333 32.718V56.3707C40.7333 57.4523 41.6101 58.329 42.6917 58.329C43.086 58.329 43.4712 58.21 43.7968 57.9874Z" fill="#F06C5C"/>
                                </g>
                            </svg>  -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="{{$video_list[$i]->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;height: 236px;"></iframe>
                            </div>
                        </div>
                        <div class="card-footer" id="card_footer">
                            <div class="col-md-12">
                                <div class="row" style="border-style: none!important;">
                                    <div class="col-md-10">
                                        <p class="mt-4">{{$video_list[$i]->title}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="mt-4">{{$video_list[$i]->duration}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row" style="border-style: none!important;">
                                    <div class="col-md-1">
                                        <p style="margin-top: 23px;"><svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.2271 9.85075C29.1915 9.75575 28.182 7.52307 25.9493 5.27852C22.9685 2.30954 19.2038 0.730042 15.0591 0.730042C10.9144 0.730042 7.14976 2.30954 4.1689 5.27852C1.93623 7.52307 0.926772 9.75575 0.891144 9.85075C0.838122 9.97043 0.81073 10.0999 0.81073 10.2308C0.81073 10.3617 0.838122 10.4911 0.891144 10.6108C0.926772 10.7058 1.93623 12.9385 4.1689 15.183C7.14976 18.152 10.9144 19.7315 15.0591 19.7315C19.2038 19.7315 22.9685 18.152 25.9493 15.183C28.182 12.9385 29.1915 10.7058 29.2271 10.6108C29.2801 10.4911 29.3075 10.3617 29.3075 10.2308C29.3075 10.0999 29.2801 9.97043 29.2271 9.85075V9.85075ZM15.0591 5.95545C15.9047 5.95545 16.7313 6.20619 17.4344 6.67597C18.1374 7.14575 18.6854 7.81347 19.009 8.59468C19.3326 9.3759 19.4173 10.2355 19.2523 11.0649C19.0873 11.8942 18.6802 12.656 18.0822 13.2539C17.4843 13.8518 16.7225 14.259 15.8932 14.424C15.0639 14.5889 14.2042 14.5043 13.423 14.1807C12.6418 13.8571 11.9741 13.3091 11.5043 12.606C11.0345 11.903 10.7838 11.0764 10.7838 10.2308C10.7838 9.09689 11.2342 8.00945 12.036 7.20767C12.8378 6.40588 13.9252 5.95545 15.0591 5.95545V5.95545Z" fill="#17A1FA"/>
                                            </svg>
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mt-4" style="color:#0A2942">{{$video_list[$i]->viewer}} views</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="mt-4" style="color: #A1A6AD">1 Hours Ago</p>
                                    </div>
                                    <div class="col-md-2" style="text-align: center;">
                                        <svg class="mt-4" width="5" height="17" viewBox="0 0 5 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.78696 8.79889C4.78696 7.69432 3.89153 6.79889 2.78696 6.79889C1.68239 6.79889 0.786957 7.69432 0.786957 8.79889C0.786957 9.90346 1.68239 10.7989 2.78696 10.7989C3.89153 10.7989 4.78696 9.90346 4.78696 8.79889Z" fill="#343D4B"/>
                                            <path d="M4.78696 2.79889C4.78696 1.69432 3.89153 0.798889 2.78696 0.798889C1.68239 0.798889 0.786957 1.69432 0.786957 2.79889C0.786957 3.90346 1.68239 4.79889 2.78696 4.79889C3.89153 4.79889 4.78696 3.90346 4.78696 2.79889Z" fill="#343D4B"/>
                                            <path d="M4.78696 14.7989C4.78696 15.9035 3.89153 16.7989 2.78696 16.7989C1.68239 16.7989 0.786957 15.9035 0.786957 14.7989C0.786957 13.6943 1.68239 12.7989 2.78696 12.7989C3.89153 12.7989 4.78696 13.6943 4.78696 14.7989Z" fill="#343D4B"/>
                                            </svg>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width:396.57px;height:366px;left: 431.57px;margin-left: 30px;margin-right: 40px;margin-bottom: 12px;">
                    <div class="card" id="card">
                        <div class="card-body" id="card_body" style="text-align: center;padding:0px !important;">
                            <!--<svg width="94" style="margin-top: 50px;" height="94" viewBox="0 0 94 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M16.5388 15.6667L77.694 15.6667C83.767 15.6667 88.8394 20.2946 89.3947 26.3421C89.8538 31.3412 90.0834 36.8211 90.0834 42.7821C90.0834 49.7611 89.7687 56.741 89.1394 63.7217H89.1394C88.5935 69.7776 83.5174 74.4167 77.4369 74.4167L16.5388 74.4167C10.4745 74.4167 5.40644 69.8017 4.84012 63.764C4.22448 57.2003 3.91666 50.9596 3.91666 45.0417C3.91666 39.1238 4.22448 32.883 4.84012 26.3194L4.84013 26.3194C5.40645 20.2817 10.4745 15.6667 16.5388 15.6667Z" fill="#F06C5C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M43.7968 57.9874L61.0436 46.1982C61.9365 45.5879 62.1656 44.3693 61.5552 43.4764C61.4191 43.2772 61.2472 43.1048 61.0484 42.968L43.8015 31.1045C42.9104 30.4915 41.6912 30.717 41.0782 31.6081C40.8536 31.9347 40.7333 32.3217 40.7333 32.718V56.3707C40.7333 57.4523 41.6101 58.329 42.6917 58.329C43.086 58.329 43.4712 58.21 43.7968 57.9874Z" fill="#F06C5C"/>
                                </g>
                                </svg>  -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="{{$video_list[$i+1]->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;height: 236px;"></iframe>
                            </div>
                        </div>
                        <div class="card-footer" id="card_footer">
                            <div class="col-md-12">
                                <div class="row" style="border-style: none!important;">
                                    <div class="col-md-10">
                                        <p class="mt-4">{{$video_list[$i+1]->title}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="mt-4">{{$video_list[$i+1]->duration}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row" style="border-style: none!important;">
                                    <div class="col-md-1">
                                        <p style="margin-top: 23px;"><svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.2271 9.85075C29.1915 9.75575 28.182 7.52307 25.9493 5.27852C22.9685 2.30954 19.2038 0.730042 15.0591 0.730042C10.9144 0.730042 7.14976 2.30954 4.1689 5.27852C1.93623 7.52307 0.926772 9.75575 0.891144 9.85075C0.838122 9.97043 0.81073 10.0999 0.81073 10.2308C0.81073 10.3617 0.838122 10.4911 0.891144 10.6108C0.926772 10.7058 1.93623 12.9385 4.1689 15.183C7.14976 18.152 10.9144 19.7315 15.0591 19.7315C19.2038 19.7315 22.9685 18.152 25.9493 15.183C28.182 12.9385 29.1915 10.7058 29.2271 10.6108C29.2801 10.4911 29.3075 10.3617 29.3075 10.2308C29.3075 10.0999 29.2801 9.97043 29.2271 9.85075V9.85075ZM15.0591 5.95545C15.9047 5.95545 16.7313 6.20619 17.4344 6.67597C18.1374 7.14575 18.6854 7.81347 19.009 8.59468C19.3326 9.3759 19.4173 10.2355 19.2523 11.0649C19.0873 11.8942 18.6802 12.656 18.0822 13.2539C17.4843 13.8518 16.7225 14.259 15.8932 14.424C15.0639 14.5889 14.2042 14.5043 13.423 14.1807C12.6418 13.8571 11.9741 13.3091 11.5043 12.606C11.0345 11.903 10.7838 11.0764 10.7838 10.2308C10.7838 9.09689 11.2342 8.00945 12.036 7.20767C12.8378 6.40588 13.9252 5.95545 15.0591 5.95545V5.95545Z" fill="#17A1FA"/>
                                            </svg>
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mt-4" style="color:#0A2942">{{$video_list[$i+1]->viewer}} views</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="mt-4" style="color: #A1A6AD">1 Hours Ago</p>
                                    </div>
                                    <div class="col-md-2" style="text-align: center;">
                                        <svg class="mt-4" width="5" height="17" viewBox="0 0 5 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.78696 8.79889C4.78696 7.69432 3.89153 6.79889 2.78696 6.79889C1.68239 6.79889 0.786957 7.69432 0.786957 8.79889C0.786957 9.90346 1.68239 10.7989 2.78696 10.7989C3.89153 10.7989 4.78696 9.90346 4.78696 8.79889Z" fill="#343D4B"/>
                                            <path d="M4.78696 2.79889C4.78696 1.69432 3.89153 0.798889 2.78696 0.798889C1.68239 0.798889 0.786957 1.69432 0.786957 2.79889C0.786957 3.90346 1.68239 4.79889 2.78696 4.79889C3.89153 4.79889 4.78696 3.90346 4.78696 2.79889Z" fill="#343D4B"/>
                                            <path d="M4.78696 14.7989C4.78696 15.9035 3.89153 16.7989 2.78696 16.7989C1.68239 16.7989 0.786957 15.9035 0.786957 14.7989C0.786957 13.6943 1.68239 12.7989 2.78696 12.7989C3.89153 12.7989 4.78696 13.6943 4.78696 14.7989Z" fill="#343D4B"/>
                                            </svg>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color: #FFF4F3;height: 400px;width: 240px;margin-bottom: 12px;">
                    <svg width="241" height="400" viewBox="0 0 241 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.147949" width="240" height="400" fill="#FFF4F3"/>
                        <path opacity="0.6" d="M108.814 204.808H102.142L101.038 208H97.5102L103.534 191.224H107.446L113.47 208H109.918L108.814 204.808ZM107.902 202.12L105.478 195.112L103.054 202.12H107.902ZM114.858 201.304C114.858 199.96 115.122 198.768 115.65 197.728C116.194 196.688 116.93 195.888 117.858 195.328C118.786 194.768 119.818 194.488 120.954 194.488C121.818 194.488 122.642 194.68 123.426 195.064C124.21 195.432 124.834 195.928 125.298 196.552V190.24H128.706V208H125.298V206.032C124.882 206.688 124.298 207.216 123.546 207.616C122.794 208.016 121.922 208.216 120.93 208.216C119.81 208.216 118.786 207.928 117.858 207.352C116.93 206.776 116.194 205.968 115.65 204.928C115.122 203.872 114.858 202.664 114.858 201.304ZM125.322 201.352C125.322 200.536 125.162 199.84 124.842 199.264C124.522 198.672 124.09 198.224 123.546 197.92C123.002 197.6 122.418 197.44 121.794 197.44C121.17 197.44 120.594 197.592 120.066 197.896C119.538 198.2 119.106 198.648 118.77 199.24C118.45 199.816 118.29 200.504 118.29 201.304C118.29 202.104 118.45 202.808 118.77 203.416C119.106 204.008 119.538 204.464 120.066 204.784C120.61 205.104 121.186 205.264 121.794 205.264C122.418 205.264 123.002 205.112 123.546 204.808C124.09 204.488 124.522 204.04 124.842 203.464C125.162 202.872 125.322 202.168 125.322 201.352ZM137.076 208.216C135.988 208.216 135.012 208.024 134.148 207.64C133.284 207.24 132.596 206.704 132.084 206.032C131.588 205.36 131.316 204.616 131.268 203.8H134.652C134.716 204.312 134.964 204.736 135.396 205.072C135.844 205.408 136.396 205.576 137.052 205.576C137.692 205.576 138.188 205.448 138.54 205.192C138.908 204.936 139.092 204.608 139.092 204.208C139.092 203.776 138.868 203.456 138.42 203.248C137.988 203.024 137.292 202.784 136.332 202.528C135.34 202.288 134.524 202.04 133.884 201.784C133.26 201.528 132.716 201.136 132.252 200.608C131.804 200.08 131.58 199.368 131.58 198.472C131.58 197.736 131.788 197.064 132.204 196.456C132.636 195.848 133.244 195.368 134.028 195.016C134.828 194.664 135.764 194.488 136.836 194.488C138.42 194.488 139.684 194.888 140.628 195.688C141.572 196.472 142.092 197.536 142.188 198.88H138.972C138.924 198.352 138.7 197.936 138.3 197.632C137.916 197.312 137.396 197.152 136.74 197.152C136.132 197.152 135.66 197.264 135.324 197.488C135.004 197.712 134.844 198.024 134.844 198.424C134.844 198.872 135.068 199.216 135.516 199.456C135.964 199.68 136.66 199.912 137.604 200.152C138.564 200.392 139.356 200.64 139.98 200.896C140.604 201.152 141.14 201.552 141.588 202.096C142.052 202.624 142.292 203.328 142.308 204.208C142.308 204.976 142.092 205.664 141.66 206.272C141.244 206.88 140.636 207.36 139.836 207.712C139.052 208.048 138.132 208.216 137.076 208.216Z" fill="#F06C5C"/>
                    </svg>
                </div>

                @php $i=$i+2; @endphp
                @endwhile

            </div>
            
            

            <div class="row mt-3" style="margin-left:30px !important;">
                <div class="row justify-content-between small my-4">
                    <p style="color: #2CB9C1;font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 36px;">Music Album
                    </p>
                    <p style="width: 121px;height: 3px;background: linear-gradient(95.06deg, #F9978E -0.14%, #5BDDC7 110.84%);
                    border-radius: 0px 14px;transform: rotate(-180deg);margin-left: 12px;"></p>
                </div>
                <div class="row">
                    <div class="col-12 px-4 p-lg-0">
                        <div class="music_album">
                            @foreach ($album_list as $a)
                            <div class="card mx-2 border-0">
                                <img src="{{asset('albums_images/'.$a->image)}}" style="height: 225px;" class="card-img-top rounded-3" alt="...">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-2" style="margin-left:30px !important;width: 1127px;">
            <!-- <div class="row mt-5" style="margin-left:30px !important;height: 870px;width: 1127px;"> -->
                <div class="row justify-content-between small my-4">
                    <p style="color: #2CB9C1;font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 36px;">Group Images
                    </p>
                    <p style="width: 121px;height: 3px;background: linear-gradient(95.06deg, #F9978E -0.14%, #5BDDC7 110.84%);
                    border-radius: 0px 14px;transform: rotate(-180deg);margin-left: 12px;"></p>
                </div>
                @php 
                    $group1="images/no_image.jpg";
                    $group2="images/no_image.jpg";
                    $group3="images/no_image.jpg";
                    $group4="images/no_image.jpg";
                    $group5="images/no_image.jpg";

                    $images_array=json_decode($band_detail_res[0]->images);
                    if(isset($images_array[0])){
                        $group1="bands_images/".$images_array[0];
                    }
                    if(isset($images_array[1])){
                        $group2="bands_images/".$images_array[1];
                    }
                    if(isset($images_array[2])){
                        $group3="bands_images/".$images_array[2];
                    }
                    if(isset($images_array[3])){
                        $group4="bands_images/".$images_array[3];
                    }
                    if(isset($images_array[4])){
                        $group5="bands_images/".$images_array[4];
                    }                                    

                @endphp
                <div class="row">
                    <div class="col-12 px-4 p-lg-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="{{asset($group1)}}" style="height: 417.93px;" class="card-img-top rounded-3" alt="...">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <img src="{{asset($group2)}}" style="width:100%;height: 206px;" class="card-img-top rounded-3" alt="...">

                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <img src="{{asset($group3)}}" style="height: 206px;" class="card-img-top rounded-3" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="{{asset($group4)}}" style="height: 344px;" class="card-img-top rounded-3" alt="...">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <img src="{{asset($group5)}}" style="height: 344px;" class="card-img-top rounded-3" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2" style="margin-left:30px !important;width: 1127px;">
            <!-- <div class="row mt-5" style="margin-left:30px !important;height: 870px;width: 1127px;"> -->
                <div class="row justify-content-between small my-4">
                    <p style="color: #2CB9C1;font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 36px;">Photo Album
                    </p>
                    <p style="width: 121px;height: 3px;background: linear-gradient(95.06deg, #F9978E -0.14%, #5BDDC7 110.84%);
                    border-radius: 0px 14px;transform: rotate(-180deg);margin-left: 12px;"></p>
                    
                    <p style="position: static;
                    left: 0%;
                    right: 73.79%;
                    top: 0%;
                    bottom: 0%;
                    
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 40px;
                    line-height: 48px;
                    
                    color: #0A2942;
                    
                    
                    /* Inside auto layout */
                    
                    flex: none;
                    order: 0;
                    flex-grow: 0;
                    ">2022 January</p><hr>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="border-style: none!important;">
                                <div class="card-body">
                                    <img src="{{asset('assets/img/photo_album/IMage1.png')}}" style="width: 324px;height: 225.39px;border-radius: 25px !important;" class="card-img-top rounded-3" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="position:static;width: 158px;
                                            height: 36px;
                                            left: 0px;
                                            top: 0px;
                                            
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 400;
                                            font-size: 24px;
                                            line-height: 36px;
                                            /* identical to box height, or 150% */
                                            
                                            
                                            color: #636B78;
                                            
                                            
                                            /* Inside auto layout */
                                            
                                            flex: none;
                                            order: 0;
                                            flex-grow: 0;
                                            ">Album Name</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="text-align: right;position: static;
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 500;
                                            font-size: 16px;
                                            line-height: 35px;
                                            color: #A1A6AD; ">July 7,2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="border-style: none!important;">
                                <div class="card-body">
                                    <img src="{{asset('assets/img/photo_album/IMage2.png')}}" style="width: 324px;height: 225.39px;border-radius: 25px !important;" class="card-img-top rounded-3" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="position:static;width: 158px;
                                            height: 36px;
                                            left: 0px;
                                            top: 0px;
                                            
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 400;
                                            font-size: 24px;
                                            line-height: 36px;
                                            /* identical to box height, or 150% */
                                            
                                            
                                            color: #636B78;
                                            
                                            
                                            /* Inside auto layout */
                                            
                                            flex: none;
                                            order: 0;
                                            flex-grow: 0;
                                            ">Album Name</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="text-align: right;position: static;
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 500;
                                            font-size: 16px;
                                            line-height: 35px;
                                            color: #A1A6AD; ">July 7,2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="border-style: none!important;">
                                <div class="card-body">
                                    <img src="{{asset('assets/img/photo_album/IMage3.png')}}" style="width: 324px;height: 225.39px;border-radius: 25px !important;" class="card-img-top rounded-3" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="position:static;width: 158px;
                                            height: 36px;
                                            left: 0px;
                                            top: 0px;
                                            
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 400;
                                            font-size: 24px;
                                            line-height: 36px;
                                            /* identical to box height, or 150% */
                                            
                                            
                                            color: #636B78;
                                            
                                            
                                            /* Inside auto layout */
                                            
                                            flex: none;
                                            order: 0;
                                            flex-grow: 0;
                                            ">Album Name</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="text-align: right;position: static;
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 500;
                                            font-size: 16px;
                                            line-height: 35px;
                                            color: #A1A6AD; ">July 7,2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="border-style: none!important;">
                                <div class="card-body">
                                    <img src="{{asset('assets/img/photo_album/IMage1.png')}}" style="width: 324px;height: 225.39px;border-radius: 25px !important;" class="card-img-top rounded-3" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="position:static;width: 158px;
                                            height: 36px;
                                            left: 0px;
                                            top: 0px;
                                            
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 400;
                                            font-size: 24px;
                                            line-height: 36px;
                                            /* identical to box height, or 150% */
                                            
                                            
                                            color: #636B78;
                                            
                                            
                                            /* Inside auto layout */
                                            
                                            flex: none;
                                            order: 0;
                                            flex-grow: 0;
                                            ">Album Name</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="text-align: right;position: static;
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 500;
                                            font-size: 16px;
                                            line-height: 35px;
                                            color: #A1A6AD; ">July 7,2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="border-style: none!important;">
                                <div class="card-body">
                                    <img src="{{asset('assets/img/photo_album/IMage2.png')}}" style="width: 324px;height: 225.39px;border-radius: 25px !important;" class="card-img-top rounded-3" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="position:static;width: 158px;
                                            height: 36px;
                                            left: 0px;
                                            top: 0px;
                                            
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 400;
                                            font-size: 24px;
                                            line-height: 36px;
                                            /* identical to box height, or 150% */
                                            
                                            
                                            color: #636B78;
                                            
                                            
                                            /* Inside auto layout */
                                            
                                            flex: none;
                                            order: 0;
                                            flex-grow: 0;
                                            ">Album Name</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="text-align: right;position: static;
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 500;
                                            font-size: 16px;
                                            line-height: 35px;
                                            color: #A1A6AD; ">July 7,2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="border-style: none!important;">
                                <div class="card-body">
                                    <img src="{{asset('assets/img/photo_album/IMage3.png')}}" style="width: 324px;height: 225.39px;border-radius: 25px !important;" class="card-img-top rounded-3" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="position:static;width: 158px;
                                            height: 36px;
                                            left: 0px;
                                            top: 0px;
                                            
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 400;
                                            font-size: 24px;
                                            line-height: 36px;
                                            /* identical to box height, or 150% */
                                            
                                            
                                            color: #636B78;
                                            
                                            
                                            /* Inside auto layout */
                                            
                                            flex: none;
                                            order: 0;
                                            flex-grow: 0;
                                            ">Album Name</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="text-align: right;position: static;
                                            font-family: 'Poppins';
                                            font-style: normal;
                                            font-weight: 500;
                                            font-size: 16px;
                                            line-height: 35px;
                                            color: #A1A6AD; ">July 7,2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row mt-5" style="margin-left:30px !important;width: 1127px;">
                <div class="row justify-content-between small my-4">
                    <p style="color: #2CB9C1;font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 36px;">Solo Images
                    </p>
                    <p style="width: 121px;height: 3px;background: linear-gradient(95.06deg, #F9978E -0.14%, #5BDDC7 110.84%);
                    border-radius: 0px 14px;transform: rotate(-180deg);margin-left: 12px;"></p>
                </div>
                <div class="row">
                    <div class="col-12 px-4 p-lg-0">
                        <div class="solo_image">
                            @foreach($solo_list as $s)
                            <div class="card mx-2 border-0">
                                <img src="{{asset('artists_images/'.$s->main_image)}}" style="height: 606px;width: 432px;" class="card-img-top rounded-3" alt="...">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  
    <footer class="bg-light text-center text-lg-start mt-5" style="margin-top: 743px !important;" id="footer">
        <div class="container margin_60_35" id="footer_container">
            <div id="footer_frame">
                <div class="collapse navbar-collapse" id="column_3">
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
                <div class="collapse navbar-collapse" id="column_2">
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

        window.addEventListener('load', _ => {
            document.querySelector('.loading').style.display = "none";
        })


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
        <link href='../css/login_alert.css' rel='stylesheet'> 
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
                                    <div class="row social-group justify-content-center" style="font-size: 10px !important;">
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