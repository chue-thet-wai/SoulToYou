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

        <link rel="icon" href="assets/dh.svg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/packages/fontawesome-free-6.0.0-web/css/all.min.css">
        <link rel="stylesheet" href="../assets/packages/slick-1.8.1/slick/slick.css">
        <link rel="stylesheet" href="../assets/packages/slick-1.8.1/slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../node_modules/colormyar/css/pdf.css">
        <link rel="stylesheet" href="../assets/css/cus.css">
        <link rel="stylesheet" href="../assets/css/home_page.css">
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
                                        <img src="../assets/img/soul.svg" alt="">
                                        <a href="{{ url('/') }}" id="soul_to_you"> SOUL TO YOU</a>
                                    </div>
                                </li>
                                <!-- <li style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;position: static;width: 484px;height: 36px;left: 0px;top: 4px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin-left: 380px !important;"> -->
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
                                        <a href="{{ url('/videos') }}" id="video" style="font-family: 'Poppins';">
                                            VIDEO <img src="../assets/img/ep_arrow-down.png" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                        <a href="{{ url('/news') }}" id="news" style="font-family: 'Poppins';">
                                            NEWS<img src="../assets/img/ep_arrow-down.png" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
                                        </a>
                                        <a href="{{ url('/') }}" id="quiz" style="font-family: 'Poppins';">
                                            QUIZZES<img src="../assets/img/ep_arrow-down.png" alt="" style="width: 20px;height:20px;margin-left: 5px;">               
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
    <div style="position: absolute;width: 100%;height: 696px;left: 0px;top: 820px;background-image: url('../assets/img/girl_group/space.svg');background-position: center;background-size: cover;background-repeat: no-repeat;">
        <div style="display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 24px 0px 0px; gap: 14px;width: 1110px;height: 534px;background: rgba(255, 255, 255, 0.6);flex: none;margin-left:156px;margin-top:85px;margin-bottom:77px;
        order: 0;
        flex-grow: 0;">
            <img src="../assets/img/girl_group/Container.png" style="width: 1110px;height: 100%;" alt="">
        </div>
    </div>
    <!-- <div class="container" style="position: absolute;width: 1130px;height: auto;left: 156px;top: 176px;background: #FFFFFF;margin-bottom: 112px;"> -->
    <div class="container" style="position: absolute;width: 1130px;height: 420px;left: 156px;top: 176px;background: #FFFFFF;margin-bottom: 112px;">
        <div class="row" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 12px;width: 1110px;height: 132px;left: 156px;top: 158px;justify-content: center;align-items: center;">
            <div class="col" style="width: 79px;height: 36px;font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 24px;line-height: 36px;color: #2CB9C1;flex: none;order: 0;flex-grow: 0;padding: 0px;">
                <p style="width: 79px;height: 36px;font-family: 'Poppins';font-style: normal;font-weight: 600;font-size:24px;line-height: 36px;color: #2CB9C1;flex: none;order: 0;flex-grow: 0;margin-left: 1px;">Artists</p>
            </div>
            <div class="col" style="margin-left: 705px;;box-sizing: border-box;width: 312px;height: 48px;background: #FFFFFF;border: 0.8px solid #A1A6AD;flex: none; order: 1;flex-grow: 0;">
                <div class="row">   
                    <div class="col">
                        <p style="left: 8.28%;right: 73.89%;top: 25%;bottom: 25%;font-family: 'Poppins';font-style: normal;font-weight: 300;font-size: 16px;line-height: 45px;">
                            Search
                        </p>
                    </img>
                    </div>
                    <div class="col" style="text-align: right;margin-top:10px;">
                        <img src="../assets/img/ep_search.svg">
                    </div>
                </div>
            </div>
            <div class="col" style="width: 1130px;height: 72px;background: #FFFFFF;flex: none;order: 1;flex-grow: 0;">
                <div style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;width: 1130px;height: 48px;left: 0px;top: 0px;background-color: #FFFFFF;margin-left: -12px;">
                    <div style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;width: 814px;height: 24px;background: rgba(255, 255, 255, 0.94);border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                        <div class="container" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px 0px 24px;gap: 48px;width: 100%;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                            <div id="left" style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 0px;gap: 48px;width: 650px;height: 24px;flex: none;order: 0;flex-grow: 0;">
                                <div id="right" style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;padding: 0px;gap: 34px;width: 650px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                                    <ul class="nav" style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 34px; width: 650px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;">
                                        <li style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 4px;width: 20px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin-left: 1px;">
                                            <a href="{{ url('/artists') }}" style="width: 20px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: rgba(99, 107, 120, 0.5);flex: none;order: 0;flex-grow: 0;margin-top: 0px;text-decoration: none;">All</a>
                                            <p style="width: 18px;height: 0px;border: 0.5px solid #A1A6AD;transform: rotate(90deg);flex: none;order: 1;flex-grow: 0;margin:0px 34px"></p>
                                        </li>
                                        <li style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 4px;width: 20px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin:0px 60px;">
                                            <a href="{{ url('/artists/boygroup') }}" style="height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: rgba(99, 107, 120, 0.5);flex: none;order: 0;flex-grow: 0;margin-top: 0px;text-decoration: none;">Boy Groups</a>
                                            <p style="width: 18px;height: 0px;border: 0.5px solid #A1A6AD;transform: rotate(90deg);flex: none;order: 1;flex-grow: 0;margin:0px 34px"></p>
                                        </li>
                                        <li style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 4px;width: 20px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin: 0px 60px;">
                                            <a href="{{ url('/artists/girlgroup') }}" style="height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #F06C5C;flex: none;order: 0;flex-grow: 0;margin-top: 0px;text-decoration: none;">Girl Groups</a>
                                            <p style="width: 18px;height: 0px;border: 0.5px solid #A1A6AD;transform: rotate(90deg);flex: none;order: 1;flex-grow: 0;margin:0px 34px"></p>
                                        </li>
                                        <li style="flex-direction: row;align-items: center;padding: 0px;gap: 4px;height: 24px;border-radius: 0px;flex: none;order: 0;flex-grow: 0;margin-left: 60px;">
                                            <a href="{{ url('/artists/solo') }}" style="width: 20px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: rgba(99, 107, 120, 0.5);flex: none;order: 0;flex-grow: 0;margin-top: 0px;text-decoration: none;">Solo Artists</a>
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
            <div class="col" style="width: 758px;height: 450px;background: #FFFFFF;flex: none;order: 0;flex-grow: 0;margin-left: -10px;">
                <img src="../assets/img/girl_group/Band_Image.svg" style="width: 100%;height: 100%;"></img>
            </div>
            <div style="transform: translate(0%, -105%);display: flex;flex-direction: column;justify-content: center;align-items: flex-start;margin-left: 12px;height: 125px;padding: 24px;width:735px;gap: 16px;left: 0%;right: 32.8%;top: 72.44%;bottom: 0%;background: rgba(0, 0, 0, 0.6);backdrop-filter: blur(3px);border-radius: 0px;margin-left: 0px;">
                <div style="display: flex; flex-direction: row;justify-content: space-between;align-items: center;padding: 10px 0px 10px 10px;gap: 10px;width: 698px;height: 36px;flex: none;order: 0;flex-grow: 0;">
                    <p style="margin-top:17px;width: 133px;height: 36px;font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 24px;line-height: 36px;color: #FFFFFF;flex: none;order: 0;flex-grow: 0;">
                        BLACKPINK
                    </p>
                    <img src="../assets/img/girl_group/bi_bookmark-heart-fill.svg" style="margin-right:20.25px;" alt="">
                </div>
                <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;padding: 0px;gap: 16px;width: 698px;height: 28px;flex: none;order: 1;flex-grow: 0;">
                    <div style="display: flex;flex-direction: row;align-items: flex-start; padding: 0px; gap: 34px; width: 382px; height: 28px;flex: none; order: 0;flex-grow: 0;">
                        <div style="display: flex;flex-direction: row;
                        align-items: center;padding: 0px; gap: 8px;width: 174px;height: 28px;flex: none; order: 0;flex-grow: 0;">
                            <img src="../assets/img/girl_group/twitter.svg" alt="">
                            <p style="width: 151px;height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #FFFFFF;flex: none;order: 1;flex-grow: 0;margin-top: 20px;">
                                2.5k Subscribers
                            </p>
                        </div>
                        <div style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 8px;width: 174px;height: 28px;flex: none;order: 1;flex-grow: 0;">
                            <img src="../assets/img/girl_group/instagram.svg" alt="">   
                            <p style="width: 151px;height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #FFFFFF;flex: none;order: 1;flex-grow: 0;margin-top: 20px;">
                                2.5k Subscribers
                            </p> 
                        </div>
                    </div>
                    <div style="flex-direction: row;justify-content: flex-end;align-items: center;padding: 0px;gap: 34px;width: 382px;height: 24px;flex: none;order: 1;flex-grow: 0;padding-left:55px;">
                        <img src="../assets/img/girl_group/pagination.svg" alt="">
                    </div>
                </div>
            </div>
           
            <div style="display: flex;flex-direction: column;align-items: flex-start;padding: 24px;gap: 10px; position: absolute;width: 370px; height: 450px;left: 758px;background: #FFFFFF;">
                <div style="display: flex; flex-direction: row;align-items: flex-start;padding: 0px;gap: 10px; width: 74px; height: 36px;flex: none; order: 0;flex-grow: 0;">
                    <p style="width: 74px;height: 36px;font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 24px;line-height: 36px;color: #0A2942;flex: none;order: 0;flex-grow: 0;">About</p>
                </div>    
                <div style="display: flex; flex-direction: row;align-items: flex-start;padding: 0px;gap: 16px;width: 310px;height: 304px;flex: none;order: 1;flex-grow: 0;">
                    <p style="width: 310px;height: 364px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 14px;line-height: 28px;color: #636B78;flex: none;order: 0;flex-grow: 0;">
                        Blackpink (Korean: 블랙핑크; commonly stylized as BLACKPINK or BLΛƆKPIИK) is a South Korean girl group formed by YG Entertainment, consisting of members Jisoo, Jennie, Rosé, and Lisa. The group debuted in August 2016 with their single album Square One, which featured "Whistle" and "Boombayah", their first number-one entries on South Korea's Gaon Digital Chart and the Billboard World Digital Song Sales chart, respectively.
                    </p>
                </div>
                <div style="display: flex;flex-direction: row;align-items: center; padding: 0px;gap: 4px;width: 121px;height: 24px;border-radius: 0px;flex: none;order: 2;flex-grow: 0;">
                    <div style="width: 121px; height: 24px;flex: none;order: 0;flex-grow: 0;">
                        <p style="left: 0%;right: 0%;top: 0%;bottom: 0%;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px; line-height: 24px;color: #FF614E;">
                            View Details ->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row" style="position: absolute; width: 1440px; height: 696px;left: 0px;top: 746px;background-color: #0A2942;left: -147%;"> -->
            <!-- <div style="background-image: url('../assets/img/girl_group/space.svg'); width: 1440px;height: 696px;left: 0px;top: 0px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div> -->
        <!-- </div> -->

        <!-- <div class="row mt-3" style="width: 1140px;height:1548px;"> -->
        <div class="row mt-3" style="padding-top:580px;">
            <div class="col" style="display: flex;flex-direction: column;align-items: flex-start;padding: 16px 0px 0px;gap: 20px;width: 864px; flex: none;order: 0;flex-grow: 0;">
                <div class="col" style="display: flex;flex-direction: row; align-items: flex-start;padding: 24px 0px 0px;gap: 24px; width: 824px; height: 106px; border-radius: 0px;flex: none; order: 0;flex-grow: 0;">
                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;padding: 10px;gap: 24px; width: 220px; height: 82px;border-radius: 0px;flex: none; order: 0;flex-grow: 0;">
                        <div style="width: 286px; height: 48px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 32px;line-height: 48px;color: #2CB9C1;flex: none; order: 0;flex-grow: 0;">
                            Top Group Artists
                        <!-- <p style="width: 104px;height: 6px;background: #F06C5C;flex: none;order: 1;flex-grow: 0;margin-top: 8px;"></p> -->
                        </div>
                    </div>
                    <div class="col" style="display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    align-items: center;
                    /* padding: 0px 14px; */
                    gap: 14px; width: 434px;
                    height: 68px;background: #FFFFFF;                   
                    flex: none;
                    order: 1;
                    flex-grow: 0;margin-left: 135px;margin-top: 5px;">
                        <img src="../assets/img/girl_group/Search.svg" style="width: 100%;" alt="">
                    </div>
                </div>

                @foreach($girl_bands as $n)
                <div style="display: flex;flex-direction: row; align-items: flex-start;padding: 24px 0px 0px;gap: 16px; width: 834px;height: 369px;border-radius: 0px;flex: none;order: 1;flex-grow: 0;">
                    <img src="{{ asset('/bands_images/'.$n->main_image) }}" alt="" style="width:354px;height:209px;">
                    <div style="display: flex;flex-direction: column;justify-content: center; align-items: flex-start; padding: 10px;gap: 24px;width: 456px;height: 345px; border-radius: 0px; flex: none;order: 1;flex-grow: 0;">
                        <div class="col" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 20px;width: 436px;height: 209px;border-radius: 0px;flex: none;order: 0;align-self: stretch;flex-grow: 0;">
                            <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;padding: 0px;gap: 10px;width: 436px;height: 29px;flex: none; order: 0;flex-grow: 0;">
                                <p style="width: 160px;height: 29px;font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 24px;line-height: 45px;color: #0A2942;flex: none;order: 0;flex-grow: 0;">
                                    {{$n->name}}
                                </p>
                                <img src="../assets/img/artists/More Icon.svg" alt="">
                            </div>
                            <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: flex-start;padding: 0px;gap: 24px;width: 436px;height: 160px;flex: none;order: 1;flex-grow: 0;">
                                <p style="width: 436px;height: 160px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 32px;color: #343D4B;flex: none;order: 0;flex-grow: 0;">
                                    {{$n->about}}
                                </p>
                            </div>
                        </div>
                        <div class="col" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 34px; width: 446px;height: 40px;flex: none; order: 1;flex-grow: 0;">
                            <a href="{{url('/artists/detail/'.$n->band_id)}}">
                            <button style="display: flex;flex-direction: row;justify-content: center;align-items: center; padding: 3px 8px 3px 16px;gap: 8px;width: 156px;height: 40px; border: 0.8px solid #D1D4D6;background-color: white;flex: none; order: 0;flex-grow: 0;">
                                <p style="width: 109px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 18px;margin-top: 15px;line-height: 24px;text-align: center;color: #A1A6AD;flex: none;order: 0;flex-grow: 0;">
                                    View Details
                                </p> 
                                <img src="../assets/img/artists/ep_arrow-down (2).png" style="width: 20px;height:20px;" alt="">
                            </button>
                            </a>
                        </div>
                        <div class="col" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 24px; width: 382px;height: 28px;flex: none;order: 2;flex-grow: 0;">
                            <div class="col" style="display: flex;
                            flex-direction: row;align-items: center;padding: 0px;gap: 14px; width: 174px;height: 28px;flex: none;order: 0;flex-grow: 0;">
                                <img src="../assets/img/artists/twitter.svg" alt="">
                                <p style="width: 151px; height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #0A2942;flex: none;order: 1;flex-grow: 0;margin-top: 22px;">
                                    {{$n->twitter_subscriber}} Subscribers
                                </p>
                            </div>
                            <div class="col" style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 14px;width: 174px;height: 28px;flex: none;order: 1;flex-grow: 0;">
                                <img src="../assets/img/artists/instagram.png" style="width: 28px;height:28px;" alt="">
                                <p style="width: 151px; height: 28px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;color: #0A2942;flex: none;order: 1;flex-grow: 0;margin-top: 22px;">
                                    {{$n->instagram_subscriber}} Subscribers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="width: 824px;height: 0px;border: 1px solid #A1A6AD;flex: none;order: 1;flex-grow: 0;">
                @endforeach

                <div style="display: flex;flex-direction: row;justify-content: center;align-items: flex-start;padding: 24px 0px 0px; gap: 16px;width: 834px; height: 76px; border-radius: 0px;flex: none;order: 7;flex-grow: 0;">
                    <div class="row" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 10px;width: 690px;height: 52px;flex: none; order: 0;flex-grow: 0;">
                        <!--<div class="col" style="width: 52px;height:52px;flex:none;order:0;flex-grow: 0;">
                            <img src="../assets/img/artists/left-circle.svg" alt="">
                        </div>
                        <div class="col" style="width: 490px;height: 52px;background-color: #FFFFFF;box-shadow: 2px 2px 44px rgba(26, 72, 72, 0.1);border-radius: 56px;flex: none;order: 1;flex-grow: 0;margin: 0px 14.33px;">
                            <div class="row" style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 24px;margin-left: 15px;margin-top: 15px;width: 608px; height: 24px;left: 29px;top: 14px;">
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 0;flex-grow: 0;">1</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 2;flex-grow: 0;">2</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 2;flex-grow: 0;">3</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 3;flex-grow: 0;">4</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 4;flex-grow: 0;">...</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 5;flex-grow: 0;">9</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 6;flex-grow: 0;">10</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 6;flex-grow: 0;">11</p>
                                <p style="width: 24px;height: 24px;font-family: 'Poppins';font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;text-align: center;color: #636B78;flex: none;order: 6;flex-grow: 0;">12</p>
                            </div>
                        </div>
                        <div class="col" style="width: 52px;height: 52px;transform: matrix(-1, 0, 0, 1, 0, 0);flex: none;order: 2;flex-grow: 0;">
                            <img src="../assets/img/artists/left-circle.svg" alt="">
                        </div>-->
                        <div class="d-flex justify-content-center">
                            {!! $girl_bands->links() !!}
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col" style="display: flex;flex-direction: row;align-items: flex-start;padding: 34px 0px 0px; width: 264px;height: 934px;border-radius: 0px;flex: none;order: 1;flex-grow: 0;">
                <div class="col-12">
                    <div class="col" style="width:245px;height:400px;flex:none;order:0;flex-grow:0;background-image: url('assets/img/ads.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
                    </div>
                    <div class="col" style="margin-top: 24px;width:245px;height:400px;flex:none;order:0;flex-grow:0;background-image: url('assets/img/ads.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
                    </div>
                    <div class="col" style="margin-top:24px;width:245px;height:400px;flex:none;order:0;flex-grow:0;background-image: url('assets/img/ads.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <footer class="bg-light text-center text-lg-start mt-5" style="margin-top: 3310px !important;" id="footer">
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
                        <img src="../assets/img/footer/ci_facebook.svg" alt="">                       
                    </a>
                    <a href="https://www.instagram.com/wingsandwheelstravels/" target="_blank" id="instagram">
                        <img src="../assets/img/footer/bxl_instagram-alt.svg" alt="">
                    </a>
                    <a href=https://www.youtube.com/channel/UC-80UCUh2R4QPpsK2ys5bnQ?view_as=subscriber" target="_blank;" id="twitter">
                        <img src="../assets/img/footer/akar-icons_twitter-fill.svg" alt="">
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
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/waypoints/lib/noframework.waypoints.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../assets/packages/slick-1.8.1/slick/slick.min.js"></script>
    <script src="../node_modules/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="../assets/JS/cus.js"></script>
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
                                    <div class="row social-group justify-content-center">
                                        <div class="col-md-6">
                                            <a href="{{ url('auth/google') }}">                    
                                                <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;width:100% !important;font-size: 10px !important;">
                                                    <span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google
                                                </button>  
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ url('auth/facebook') }}">                
                                                <button type="button" class="btn btn-icon btn-primary text-left " style="margin-left:5% !important;width:100% !important;font-size: 10px !important;">
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