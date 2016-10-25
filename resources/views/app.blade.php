@yield('html')
<html>
<head>
    <meta charset="utf-8">
    <title>My Cloud</title>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/font-awesome/css/font-awesome.min.cs') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/css/counter.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/more-css.css') }}" rel="stylesheet">
</head>
	<body>
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">MY CLOUD</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="{{ url('/') }}">home</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li>
							<a href="{{ url('/auth/login') }}">login</a>
						</li>
						<li>
							<a href="{{ url('/auth/register') }}">register</a>
						</li>
						
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">sort <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/sortDate') }}">sort all uploads by date</a></li>
								<li><a href="{{ url('/') }}">sort all uploads by likes</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">search <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/searchUser') }}">search by user name</a></li>
								<li><a href="{{ url('/searchSong') }}">search by track name</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/user/'.Auth::id()) }}">my profile</a></li>
								<li><a href="{{ url('/upload') }}">upload</a></li>
								<li><a href="{{ url('/mytracks') }}">storage</a></li>
								<li><a href="{{ url('/playlist') }}">playlist</a></li>
								<li><a href="{{ url('/auth/logout') }}">logout</a></li>
							</ul>
						</li>
						@endif
					</ul>
				</div>
		</nav>
		
		<div class="container">
		@if (Auth::guest())		
		@yield('slider')
		@yield('counter')
		@endif
			@if (Session::has('message'))
			<div class="flash alert-info">
				<p class="panel-body">
					{{ Session::get('message') }}
				</p>
			</div>
			@endif
			@if ($errors->any())
			<div class='flash alert-danger'>
				<ul class="panel-body">
					@foreach ( $errors->all() as $error )
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>@yield('title')</h2>
							@yield('title-meta')
						</div>
						
						<div class="panel-body">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
			</div>
			<!--  footer --> 
			<footer>
			</footer>
		<!-- Scripts -->
		<script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>
		<script>
	    $('.carousel').carousel({
	        interval: 5000 //changes the speed
	    })
		</script>
	</body>
</html>
