<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Student Leave System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                    MENU
                    </button>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        Administrator
                    </a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
                    {{-- <form class="navbar-form navbar-left" method="GET" role="search">
                        <div class="form-group">
                            <input type="text" name="q" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </form> --}}
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Account
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                        
                                    <li class="divider"></li>
                                    <li> <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>  	<div class="container-fluid main-container">
                  <div class="col-md-2 sidebar">
                      <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{url('/home')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                            <li><a href="{{url('/appliedLeaveList')}}"><span class="glyphicon glyphicon-plane"></span> Applied Leave</a></li>
                            <li><a href="{{url('/createStudent')}}"><span class="glyphicon glyphicon-signal"></span> Create Student</a></li>
        
                            <!-- Dropdown-->
                            {{-- <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl1">
                                    <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
                                </a>
        
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
        
                                            <!-- Dropdown level 2 -->
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                                    <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                                </a>
                                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav">
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
        
                            <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li> --}}
        
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
        
            </div>
        </div>  		</div>
        
                <main class="py-4">
                    @yield('content')
                </main>
                
        </div>
       

       
    </div>
</body>
</html>
<script></script>
