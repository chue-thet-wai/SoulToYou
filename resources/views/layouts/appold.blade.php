<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--<link href="https://bootswatch.com/4/minty/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="overflow-x: hidden;">
        <nav class="navbar navbar-default" style="margin-bottom:0% !important;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <!--<a class="nav-link"
                                        style="cursor: pointer" 
                                        data-toggle="modal" 
                                        data-target="#loginModal">{{ __('Login') }}
                                    </a>-->
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

   

        <div class="py-4">
            <div class="row">
            @if(Auth::check())
                <div class="col-md-2">                
                    <!--<ul class="list-group">
                        <li class="list-group-item" style="background: #46b1e6;color: #ffffff;">Control Panel</li>
                        <li class="list-group-item"><a href="">Users</a></li>
                        <li class="list-group-item"><a href="{{route('news.index')}}">News</a></li>
                        <li class="list-group-item"><a href="{{route('mtvs.index')}}">MTV</a></li>
                        <li class="list-group-item"><a href="{{route('bands.index')}}">Band</a></li>
                        <li class="list-group-item"><a href="{{route('albums.index')}}">Albums</a></li>
                        <li class="list-group-item"><a href="{{route('artists.index')}}">Artists</a></li>
                    </ul>-->
                    <div class="wrapper d-flex">
                        <div class="sidebar"> 
                            <div class="dashboard-title"><b><i class="fas fa-home"></i>DASHBOARD</b></div>
                            <small class="text-muted pl-3"><i class="fas fa-user"></i>USER</small>
                            <ul>
                                <li><a href="{{ url('admin/profile') }}">Profile</a></li>
                                <li><a href="{{ url('admin/userlist') }}">User List</a></li>    
                            </ul> 
                            <small class="text-muted px-3"><i class="fas fa-newspaper"></i>NEWS</small>
                            <ul>
                                <li><a href="{{route('news.index')}}">News</a></li>
                            </ul> 
                            <small class="text-muted px-3"><i class="fas fa-video"></i>VIDEOS</small>
                            <ul>
                                <li><a href="{{route('mtvs.index')}}">MTV</a></li>
                                <li><a href="{{route('bands.index')}}">Band</a></li>
                                <li><a href="{{route('albums.index')}}">Albums</a></li>
                                <li><a href="{{route('artists.index')}}">Artists</a></li>
                            </ul>
                            <small class="text-muted px-3"><i class="fas fa-video"></i>QUIZZES</small>
                            <ul>
                                <li><a href="{{route('quiz.index')}}">Quizzes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 admin_main_content">
                    @include('layouts.error')
                    @yield('content')
                </div>
            </div> 
            @else              
                @yield('content')
            @endif           
        </div>
    </div>
</body>
</html>
