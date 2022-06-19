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
        <meta property="og:image" content="assets/img/bootstrap5.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://digitalhunter.io/">
        <meta property="twitter:title" content="Soul To You">
        <meta property="twitter:description" content="Soul To You">
        <meta property="twitter:image" content="assets/img/bootstrap5.png">

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
        <link rel="stylesheet" href="{{asset('css/user.css')}}">
        <meta name="theme-color" id="theme" content="#fff">
        <style>
            .nav li>#nav_home_tab.active,.nav li>#nav_profile_tab.active, .nav .show>.nav-link {
                color: #2CB9C1 !important;

            }
            a{
                text-decoration: none !important;
            }
            #artist{
                /* Nav Item */
                position: static;
                left: 0%;
                right: 19.83%;
                top: 0%;
                bottom: 0%;

                /* Title */

                font-family: 'Poppins';
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                width: 125px;
                height: 24px;               
                
                flex: none;
                order: 0;
                flex-grow: 0;
                margin-right: -10px;
                margin-left: 32px;
                margin-top: 2px;
               
            }
            #news_active{
                display: flex;
                flex-direction: row;
                align-items: center;
                padding: 0px;

                position: static;
                left: 294px;
                top: 0%;
                bottom: 0%;

                border-radius: 0px;
                /* identical to box height, or 150% */
                color: #2CB9C1 !important;
                /* Inside auto layout */

                flex: none;
                order: 2;
                flex-grow: 0;
                /* margin: 0px 32px; */
                
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                margin: 0px 24px;
                width: 100px;
                line-height: 36px;
            }
            .news_type_title{
                position: absolute;
                border-top-right-radius: 10px;
                border-bottom-left-radius: 10px;
                margin:2%;
                padding:1% 3% 1% 3%;
                background-image: linear-gradient(95.06deg, #F9978E -0.14%, #5BDDC7 110.84%);
                color:#ffffff;
                margin-top: 150px;
                margin-left: 180px;
                font-size: 2em;
            }
        </style>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"> 
         <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/page.css')}}">
        <link rel="stylesheet" href="{{asset('css/photo.css')}}">
        
        <!-- JavaScript -->
        <script src="{{asset('js/photo.js')}}"></script>
       </head>
    <body>
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
                                       <a id="artist" href="{{ url('/artists') }}" style="font-family: 'Poppins';">
                                            ARTISTS<img src="{{asset('assets/img/ep_arrow-down.png')}}" alt="" style="width: 20px;height:20px;margin-left: 5px;">                                            
                                        </a>
                                        <a id="video" href="{{ url('/videos') }}" style="font-family: 'Poppins';">
                                            VIDEO <img src="{{asset('assets/img/ep_arrow-down.png')}}" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                        <a id="news_active" href="{{ url('/news') }}">
                                            <svg width="121" height="36" viewBox="0 0 121 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.984 17H11.624L4.016 5.504V17H0.656V0.223999H4.016L11.624 11.744V0.223999H14.984V17ZM21.6644 2.96V7.16H27.3044V9.824H21.6644V14.264H28.0244V17H18.3044V0.223999H28.0244V2.96H21.6644ZM53.4699 0.248L48.7899 17H44.8299L41.6859 5.072L38.3979 17L34.4619 17.024L29.9499 0.248H33.5499L36.5019 13.256L39.9099 0.248H43.6539L46.8699 13.184L49.8459 0.248H53.4699ZM61.4478 17.168C60.2798 17.168 59.2238 16.968 58.2798 16.568C57.3518 16.168 56.6158 15.592 56.0718 14.84C55.5278 14.088 55.2478 13.2 55.2318 12.176H58.8318C58.8798 12.864 59.1198 13.408 59.5518 13.808C59.9998 14.208 60.6078 14.408 61.3758 14.408C62.1598 14.408 62.7758 14.224 63.2238 13.856C63.6718 13.472 63.8958 12.976 63.8958 12.368C63.8958 11.872 63.7438 11.464 63.4398 11.144C63.1358 10.824 62.7518 10.576 62.2878 10.4C61.8398 10.208 61.2158 10 60.4158 9.776C59.3278 9.456 58.4398 9.144 57.7518 8.84C57.0798 8.52 56.4958 8.048 55.9998 7.424C55.5198 6.784 55.2798 5.936 55.2798 4.88C55.2798 3.888 55.5278 3.024 56.0238 2.288C56.5198 1.552 57.2158 0.991999 58.1118 0.607999C59.0078 0.208 60.0318 0.0079999 61.1838 0.0079999C62.9118 0.0079999 64.3118 0.432 65.3838 1.28C66.4718 2.112 67.0718 3.28 67.1838 4.784H63.4878C63.4558 4.208 63.2078 3.736 62.7438 3.368C62.2958 2.984 61.6958 2.792 60.9438 2.792C60.2878 2.792 59.7598 2.96 59.3598 3.296C58.9758 3.632 58.7838 4.12 58.7838 4.76C58.7838 5.208 58.9278 5.584 59.2158 5.888C59.5198 6.176 59.8878 6.416 60.3198 6.608C60.7678 6.784 61.3918 6.992 62.1918 7.232C63.2798 7.552 64.1678 7.872 64.8558 8.192C65.5438 8.512 66.1358 8.992 66.6318 9.632C67.1278 10.272 67.3758 11.112 67.3758 12.152C67.3758 13.048 67.1438 13.88 66.6798 14.648C66.2158 15.416 65.5358 16.032 64.6398 16.496C63.7438 16.944 62.6798 17.168 61.4478 17.168Z" fill="#2CB9C1"/>
                                                <circle cx="111" cy="18" r="10" fill="url(#paint0_linear_2_751)"/>
                                                <path d="M105.778 15.7455L105.778 15.7455L105.777 15.746C105.691 15.8258 105.622 15.9226 105.573 16.0314C105.525 16.1402 105.5 16.2581 105.5 16.3779C105.5 16.4977 105.525 16.6156 105.573 16.7245C105.622 16.8333 105.691 16.93 105.777 17.0099L105.778 17.0107L110.359 21.2508L110.359 21.2509C110.535 21.4132 110.765 21.5 111 21.5C111.234 21.5 111.464 21.4132 111.64 21.2509L111.64 21.2509L116.221 17.0118C116.221 17.0117 116.221 17.0117 116.221 17.0116C116.221 17.0116 116.221 17.0116 116.221 17.0116C116.307 16.9317 116.378 16.8348 116.426 16.7258C116.475 16.6166 116.5 16.4982 116.5 16.3779C116.5 16.2576 116.475 16.1393 116.426 16.0301C116.378 15.921 116.307 15.824 116.221 15.7441C116.049 15.585 115.824 15.5 115.594 15.5C115.364 15.5 115.138 15.5852 114.966 15.7446L114.806 15.893V15.8936L111 19.4158L107.033 15.7455C107.033 15.7454 107.033 15.7453 107.033 15.7452C107.033 15.7452 107.033 15.7452 107.033 15.7451C106.861 15.5859 106.635 15.5008 106.405 15.5008C106.175 15.5008 105.95 15.586 105.778 15.7455Z" fill="white" stroke="white"/>
                                                <defs>
                                                    <linearGradient id="paint0_linear_2_751" x1="100.966" y1="8.05055" x2="124.938" y2="10.173" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#F9978E"/>
                                                        <stop offset="1" stop-color="#5BDDC7"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>               
                                        </a>
                                        <a id="quiz" href="{{ url('/artists') }}" style="font-family: 'Poppins';">
                                            QUIZZES<img src="{{asset('assets/img/ep_arrow-down.png')}}" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                       
                                        @guest
                                            @if (Route::has('login'))
                                                <a id="user_profile"
                                                    style="cursor: pointer;font-weight: 500;font-size: 16px;" 
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
    
    <div class="container" style="position: absolute;width: 1130px;height: auto;left: 15%;top: 176px;background: #FFFFFF;margin-bottom: 112px;">
        <div class="row" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 12px;width: 1110px;height: 132px;left: 156px;top: 158px;justify-content: center;align-items: center;">
            <div class="col" style="width: 1130px;height: 72px;background: #FFFFFF;flex: none;order: 1;flex-grow: 0;">
                <div style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;width: 1130px;height: 48px;left: 0px;top: 0px;background-color: #FFFFFF;margin-left: -12px;">
                    <div style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;width: 814px;height: 24px;background: rgba(255, 255, 255, 0.94);border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                        <div class="container" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px 0px 24px;gap: 48px;width: 100%;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                            <div id="left" style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 0px;gap: 48px;width: 650px;height: 24px;flex: none;order: 0;flex-grow: 0;">
                                <div id="right" style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;padding: 0px;gap: 34px;width: 650px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                                    <ul class="nav" style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 34px; width: 650px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                                        <li style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 4px;width: 20px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin-left: 1px;">
                                            <a href="{{ url('/news') }}" style="width: 20px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color:#F06C5C;flex: none;order: 0;flex-grow: 0;margin-top: 0px;">News</a>
                                            <p style="width: 18px;height: 0px;border: 0.5px solid #A1A6AD;transform: rotate(90deg);flex: none;order: 1;flex-grow: 0;margin:0px 34px"></p>
                                        </li>
                                        <li style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 4px;width: 20px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin:0px 60px;">
                                            <a href="{{ url('/news/breaking') }}" style="height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: rgba(99, 107, 120, 0.5);flex: none;order: 0;flex-grow: 0;margin-top: 0px;">Breaking News</a>
                                            <p style="width: 18px;height: 0px;border: 0.5px solid #A1A6AD;transform: rotate(90deg);flex: none;order: 1;flex-grow: 0;margin:0px 34px"></p>
                                        </li>
                                        <li style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 4px;width: 20px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin: 0px 60px;">
                                            <a  href="{{ url('/news/trending') }}" style="height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: rgba(99, 107, 120, 0.5);flex: none;order: 0;flex-grow: 0;margin-top: 0px;">Trending News</a>
                                            <p style="width: 18px;height: 0px;border: 0.5px solid #A1A6AD;transform: rotate(90deg);flex: none;order: 1;flex-grow: 0;margin:0px 34px"></p>
                                        </li>
                                        <li style="flex-direction: row;align-items: center;padding: 0px;gap: 4px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin-left: 60px;">
                                            <a  href="{{ url('/news/popular') }}" style="width: 20px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: rgba(99, 107, 120, 0.5);flex: none;order: 0;flex-grow: 0;margin-top: 0px;">Popular News</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col" style="width: 863px;height: 400px;background: #FFFFFF;flex: none;order: 0;flex-grow: 0;margin-left: -10px;margin-top: 10px;">
                <div class="row" style="width: 863px;height: 400px;background: #FFFFFF;flex: none;order: 0;flex-grow: 0;margin-left: -10px;">
                    <div class="col-lg-8" style="padding:1px;height:100%;">
                    <!--<div id="PhotoGallery" class="photo-gallery">-->
                        <div class="row"  style="height:100%;">
                            <div class="col-md-12" style="padding:1px;height:100%;">
                                <figure class="photo-gallery--image" style="height:100%;">
                                    <a href="{{asset('news_images/'.$allnews_res[0]->image)}}" class="photo" title=" {{$allnews_res[0]->title}}">
                                        <img src="{{asset('news_images/'.$allnews_res[0]->image)}}" alt="Image 1" title=" {{$allnews_res[0]->title}}" style="width:100%;height:100%;">
                                    </a>
                                    <div style="transform: translate(0%, -100%);display: flex;flex-direction: column;justify-content: center;align-items: flex-start;margin-left: 12px;height: 125px;padding: 24px;width:100%;gap: 16px;left: 0%;right: 32.8%;top: 72.44%;bottom: 0%;background: rgba(0, 0, 0, 0.6);backdrop-filter: blur(3px);border-radius: 0px;margin-left: 0px;">
                                        <div style="display: flex; flex-direction: row;justify-content: space-between;align-items: center;padding: 10px 0px 10px 10px;gap: 10px;width: 100%;height: 100%;flex: none;order: 0;flex-grow: 0;">
                                            <p style="width:100%;margin-top:17px;font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 15px;line-height: 36px;color: #FFFFFF;flex: none;order: 0;flex-grow: 0;">
                                                {{$allnews_res[0]->title}}
                                            </p>                                        
                                        </div>                                   
                                    </div>
                                </figure>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:1px;height:100%;">
                        <div class="row"  style="height:100%;"> 
                            <div class="col-md-12" style="padding:1px;">
                                <figure class="photo-gallery--image" style="height:100%;">
                                    <a href="{{asset('news_images/'.$allnews_res[1]->image)}}" class="photo" title=" {{$allnews_res[1]->title}}">
                                        <img src="{{asset('news_images/'.$allnews_res[1]->image)}}" alt="Image 2" title=" {{$allnews_res[1]->title}}" style="width:100%;height:100%;">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-12" style="padding:1px;">
                                <figure class="photo-gallery--image" style="height:100%;">
                                    <a href="{{asset('news_images/'.$allnews_res[2]->image)}}" class="photo" title=" {{$allnews_res[2]->title}}">
                                        <img src="{{asset('news_images/'.$allnews_res[2]->image)}}" alt="Image 3" title=" {{$allnews_res[2]->title}}" style="width:100%;height:100%;">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>                
                </div>                
            </div>
            <!-- <div class="col" style="background-image: url('assets/img/ads.png');background-repeat: no-repeat;background-position: center;background-size: cover;width: 240px;height: 383px;margin-top: 10px;"> -->
            <div class="col" style="width:245px;height:400px;flex:none;order:0;flex-grow:0;background-image: url('assets/img/ads.png');background-position: center;background-repeat: no-repeat;background-size: cover;margin-top: 10px;">
            </div>
        </div>
        <!-- <div class="row mt-3" style="width: 1140px;height:1548px;"> -->
        <div class="row mt-3">
            <!-- <div class="col" style="display: flex;flex-direction: column;align-items: flex-start;padding: 16px 0px 0px;gap: 20px;width: 864px;height: 1436px; flex: none;order: 0;flex-grow: 0;"> -->
            <div class="col" style="display: flex;flex-direction: column;align-items: flex-start;padding: 16px 0px 0px;gap: 20px;width: 864px; flex: none;order: 0;flex-grow: 0;">
                <div style="display: flex;flex-direction: row; align-items: flex-start;padding: 24px 0px 0px;gap: 24px; width: 824px; height: 106px; border-radius: 0px;flex: none; order: 0;flex-grow: 0;">
                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;padding: 10px;gap: 24px; width: 220px; height: 82px;border-radius: 0px;flex: none; order: 0;flex-grow: 0;">
                        <div style="width: 286px; height: 48px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 32px;line-height: 48px;color: #2CB9C1;flex: none; order: 0;flex-grow: 0;">
                            News
                        <p style="width: 104px;height: 6px;background: #F06C5C;flex: none;order: 1;flex-grow: 0;margin-top: 8px;"></p>
                        </div>
                    </div>
                </div>


                @foreach($allnews_res as $n)
                <div style="display: flex;flex-direction: row; align-items: flex-start;padding: 0px 0px 0px;gap: 16px; width: 834px;height: 220px;border-radius: 0px;flex: none;order: 1;flex-grow: 0;">
                    <div style="width:354px;height:200px;display: flex;">
                        <img src="{{asset('news_images/'.$n->image)}}" alt="breaking new" style="width:354px;height:200px;">
                        <div class="news_type_title">{{$news_type[$n->type]}}</div>
                    </div>
                    <div style="display: flex;flex-direction: column;justify-content: center; align-items: flex-start; padding: 10px;gap: 24px;width: 456px;height: 220px; border-radius: 0px; flex: none;order: 1;flex-grow: 0;">
                        <div class="col" style="display: flex;flex-direction: column;align-items: flex-start;padding-top: 20px;gap: 20px;width: 436px;height: 170px;border-radius: 0px;flex: none;order: 0;align-self: stretch;flex-grow: 0;">
                            <a href="{{url('/news/detail/'.$n->new_id)}}">
                                <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: flex-start;padding: 0px;gap: 24px;width: 436px;height: 170px;flex: none;order: 1;flex-grow: 0;">
                                    <p style="width: 436px;height: 170px;font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 16px;line-height: 32px;color: #343D4B;flex: none;order: 0;flex-grow: 0;margin-top:">
                                        {{$n->title}}
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 20px; width: 446px;height: 25px;flex: none; order: 1;flex-grow: 0;margin-top:-5%;">
                            <div style="display: flex;flex-direction: row;justify-content: center;align-items: center; width: 156px;height: 25px; background-color: white;flex: none; order: 0;flex-grow: 0;">
                                <p style="width: 156px;height: 25px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 13px;line-height: 20px;color: #A1A6AD;flex: none;order: 0;flex-grow: 0;">
                                    <span class="glyphicon glyphicon glyphicon-time" style="color:#A1A6AD;;"></span> 2 hr ago
                                </p> 
                            </div>
                        </div>
                        <div class="col" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 24px; width: 382px;height: 28px;flex: none;order: 2;flex-grow: 0;margin-top:-5%;">
                            <div class="col" style="display: flex;
                            flex-direction: row;align-items: center;padding: 0px;gap: 14px; width: 70px;height: 28px;flex: none;order: 0;flex-grow: 0;">
                                <img src="{{asset('images/like_gray.png')}}" style="width: 15px;height:15px;" alt="">
                                <p style="width: 50px; height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #0A2942;flex: none;order: 1;flex-grow: 0;margin-top: 22px;">
                                    23
                                </p>
                            </div>
                            <div class="col" style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 14px;width: 70px;height: 28px;flex: none;order: 1;flex-grow: 0;">
                                <img src="{{asset('images/unlike_gray.png')}}" style="width: 15px;height:15px;" alt="">
                                <p style="width: 50px; height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #0A2942;flex: none;order: 1;flex-grow: 0;margin-top: 22px;">
                                    23
                                </p>
                            </div>
                            <div class="col" style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 14px;width: 174px;height: 28px;flex: none;order: 1;flex-grow: 0;">
                                <img src="{{asset('images/comment.png')}}" style="width: 15px;height:15px;" alt="">
                                <p style="width: 50px; height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #0A2942;flex: none;order: 1;flex-grow: 0;margin-top: 22px;">
                                    5
                                </p>
                            </div>
                            <div class="col" style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 14px;width: 90px;height: 25px;flex: none;order: 1;flex-grow: 0;">
                                <img src="assets/img/artists/More Icon.svg" alt="" style="width: 12px;">
                            </div>                            
                        </div>
                    </div>
                </div>
                <hr style="width: 824px;height: 0px;border: 1px solid #A1A6AD;flex: none;order: 1;flex-grow: 0;">
                @endforeach
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5" style="margin-top: 2400px !important;" id="footer">
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
                        <img src="assets/img/footer/ci_facebook.svg" alt="">                       
                    </a>
                    <a href="https://www.instagram.com/wingsandwheelstravels/" target="_blank" id="instagram">
                        <img src="assets/img/footer/bxl_instagram-alt.svg" alt="">
                    </a>
                    <a href=https://www.youtube.com/channel/UC-80UCUh2R4QPpsK2ys5bnQ?view_as=subscriber" target="_blank;" id="twitter">
                        <img src="assets/img/footer/akar-icons_twitter-fill.svg" alt="">
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
    
    <!--Photo Viewer-->
    <div id="PhotoViewer" class="photo-viewer">
        <header class="photo-viewer--title">
            <h1 id="PhotoViewerTitle">Image Title</h1>
            <div id="PhotoViewerClose" class="photo-viewer--close"><a href="#">X</a></div>
        </header>
        <div class="photo-viewer--container">
            <figure class="photo-viewer--current-image" id="PhotoViewerCurrentImageContainer">
            <img id="PhotoViewerCurrentImage" src="">
            </figure>
        </div>
        <div class="photo-viewer--controls">
            <div id="PhotoViewerPreviousImage" class="photo-viewer--previous-image"><a href="#">&laquo; Previous</a></div>
            <div id="PhotoViewerCount" class="photo-viewer--count">1/10</div>
            <div id="PhotoViewerNextImage" class="photo-viewer--next-image"><a href="#">Next &raquo;</a></div>
        </div>
    </div>

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

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true" 
    style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;">
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