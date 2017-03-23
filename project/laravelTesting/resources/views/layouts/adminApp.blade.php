<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" style="zoom: reset;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        #message_animation{
            display: none;
        }
        /*body {
            background-image: url("5a.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center; 
        }*/
        
        table{
            table-layout: fixed;
            word-wrap: break-word;
        }
        input[type=number]::-webkit-inner-spin-button,  input[type=number]::-webkit-outer-spin-button{
                        -webkit-appearance: none;
                        margin: 0;
                    }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="color: #2579a9;">
                        La Verdad Christian College
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li class="dropdown">
                                <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #2579a9;">
                                   <span class="glyphicon glyphicon-cog"></span></span>
                                </a style="color: #2579a9;">

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/adminSuccessful" style="color: #2579a9;">
                                             <span class="glyphicon glyphicon-user"></span> &nbsp Admin
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="/adminLogout" style="color: #2579a9;">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        @if (Session::has('message'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success" id="message_animation">{{ Session::get('message') }} {{ Auth::user()->name }} !</div>
                    </div>
                </div>
            </div>
        @elseif (Session::has('message_admin'))
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="alert alert-success" id="message_animation">{{ Session::get('message_admin') }}</div>
                    </div>
                </div>
            </div>
        @elseif (Session::has('message_error'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger" id="message_animation">{{ Session::get('message_error') }}</div>
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="js/jquery-1.9.1.js"></script>
    <script>
        $(document).ready(function(){
            $("#message_animation").slideDown("slow");
        });

        $(document).ready(function() {
            $("#message_animation").delay(3000).slideUp(700);
        });
    </script>
    <script src="{{ asset('js/app.js') }}">
    </script>
</body>
</html>
