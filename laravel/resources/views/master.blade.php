<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<script src="/../lib/jquery-2.1.4.min.js"></script>
        <script src="/../lib/functions.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/../lib/bootstrap-3.3.5-dist/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="/../lib/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<link rel="stylesheet" href="/../css/style.css">

	<script src="/../lib/bootstrap-3.3.5-dist/js/bootstrap.js"></script>

	<link rel="icon" type="image/ico" href="/../css/favicon.ico">

	<title>Group™</title>
</head>
<body>

	<nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Group™</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">About</a></li>
          </ul>
            @if(!Auth::user())
          <ul class="nav navbar-nav navbar-right">
              <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
            @else
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
            @endif
        </div>
      </div>
    </nav>
    
    @if (Auth::user())
        <p>  Hello {{ Auth::user()->fname }} {{ Auth::user()->lname }}!<p>
    @endif
   
    @yield('content')
</body>
</html>