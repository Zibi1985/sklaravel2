<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&subset=latin,latin-ext" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

<nav class="navbar navbar-default navbar-fixed-top">
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
            <a class="navbar-brand" href="{{ config('app.url') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ action('VideosController@index') }}">Filmy</a></li>
                <li><a href="{{ action('PagesController@contact') }}">Kontakt</a></li>
                <li><a href="{{ action('PagesController@about') }}">O nas</a></li>
            </ul>
        @guest
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                
                <!-- Authentication Links -->
                <li><a href="{{ route('login') }}">Zaloguj</a></li>
                <li><a href="{{ route('register') }}">Rejestracja</a></li>
			</ul>
        @else
	        <ul class="nav navbar-nav navbar-right">
		        <li><a href="{{ action('VideosController@create') }}">Dodaj Film</a></li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						Wyloguj się
					</a>
				</li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                {{ csrf_field() }}
                </form>
	        </ul>
        @endguest

        </div>
    </div>
</nav>

<!-- wrapper -->
<div class="site-wrappper">

    <!-- .container -->
    <div class="container site-content">
		@yield('content')
    </div><!-- end of .container -->

</div><!-- end of wrapper -->


<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <p>&copy; BoxMp3 2018</p>
    </div>
</footer>


<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
