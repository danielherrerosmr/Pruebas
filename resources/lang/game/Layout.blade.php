<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Game Warrior</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta charset="UTF-8">
    <meta name="description" content="Game Warrior">
    <meta name="keywords" content="warrior, game, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />


    <style>
    body {
        background-color: #ffb320;
    }

    .container2 {
        background: #ffb320;
        padding: 4%;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }
    </style>

</head>

<body>
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <a class="site-logo" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </a>
            <div class="user-panel">
                <a href="/login">Iniciar Sesión</a> / <a href="/register">Regitro</a>
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <!-- site menu -->
            <nav class="main-menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ action('GameController@index') }}">Store</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Forums</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container2">
    <br>
        @yield('content')
    </div>
</body>

</html>