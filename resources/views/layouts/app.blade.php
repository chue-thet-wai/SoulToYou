<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soul To You</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cs-skin-elastic.css') }}">  
    

    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
     

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel" style="background-color: #0a2942;">
        <nav class="navbar navbar-expand-sm" style="background: #0a2942;">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('images/footer_logo.png')}}" alt="Logo" style="max-width: 25% !important;"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('images/footer_logo.png')}}" alt="Logo" style="max-width: 25px !important;"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{route('home')}}"> <i class="menu-icon fas fa-home"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-user"></i>USER</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="{{ url('admin/profile') }}">Profile</a></li>
                            <li><a href="{{ url('admin/userlist') }}">User List</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">NEWS</h3><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="{{route('news.index')}}"><i class="menu-icon fas fa-newspaper"></i> News</a>
                    </li>
                    <h3 class="menu-title">VIDEOS</h3><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="{{route('mtvs.index')}}"><i class="menu-icon fas fa-video"></i> MTVS</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('bands.index')}}"><i class="menu-icon fas fa-users"></i> BANDS</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('albums.index')}}"><i class="menu-icon fas fa-images"></i> ALBUMS</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('artists.index')}}"><i class="menu-icon fas fa-star"></i> ARTISTS</a>
                    </li>

                    <h3 class="menu-title">QUIZZES</h3><!-- /.menu-title -->

                    <li class="menu-item">
                        <a href="{{route('quiz.index')}}"><i class="menu-icon fas fa-smile"></i> QUIZ</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <!--<button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> -->  
                        <div class="page-title">
                            <h3>Dashboard</h3>
                        </div>                     
                    </div>
                </div>
                
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('images/user_logo.png')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ url('admin/profile') }}"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="{{ url('admin/logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                    <b style="float: right;margin-top: 1%;margin-right: 2%;">{{ Auth::user()->name }}</b>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        
        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12 mb-4 mt-4">
                        @include('layouts.error')
                        @yield('content')
                    </div>
                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    

</body>

</html>
