<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title', 'Administrator')</title>
		@yield('head')
		<!-- Bootstrap CSS -->
		<link href="{!! a('components/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
		<link href="{!! a('components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
		<link href="{!! a('components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') !!}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{!! a('css/admin.css') !!}">
		<link rel="stylesheet" type="text/css" href="{!! a('css/colors.css') !!}">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->			
		<link rel="apple-touch-icon" sizes="57x57" href="{!! a('assets/icons/apple-icon-57x57.png') !!}">
		<link rel="apple-touch-icon" sizes="60x60" href="{!! a('assets/icons/apple-icon-60x60.png') !!}">
		<link rel="apple-touch-icon" sizes="72x72" href="{!! a('assets/icons/apple-icon-72x72.png') !!}">
		<link rel="apple-touch-icon" sizes="76x76" href="{!! a('assets/icons/apple-icon-76x76.png') !!}">
		<link rel="apple-touch-icon" sizes="114x114" href="{!! a('assets/icons/apple-icon-114x114.png') !!}">
		<link rel="apple-touch-icon" sizes="120x120" href="{!! a('assets/icons/apple-icon-120x120.png') !!}">
		<link rel="apple-touch-icon" sizes="144x144" href="{!! a('assets/icons/apple-icon-144x144.png') !!}">
		<link rel="apple-touch-icon" sizes="152x152" href="{!! a('assets/icons/apple-icon-152x152.png') !!}">
		<link rel="apple-touch-icon" sizes="180x180" href="{!! a('assets/icons/apple-icon-180x180.png') !!}">
		<link rel="icon" type="image/png" sizes="192x192"  href="{!! a('assets/icons/android-icon-192x192.png') !!}">
		<link rel="icon" type="image/png" sizes="32x32" href="{!! a('assets/icons/favicon-32x32.png') !!}">
		<link rel="icon" type="image/png" sizes="96x96" href="{!! a('assets/icons/favicon-96x96.png') !!}">
		<link rel="icon" type="image/png" sizes="16x16" href="{!! a('assets/icons/favicon-16x16.png') !!}">
		<link rel="manifest" href="{!! a('assets/icons/manifest.json') !!}">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="{!! a('assets/icons/ms-icon-144x144.png') !!}">
		<meta name="theme-color" content="#ffffff">
		@yield('style')
	</head>
	<body>
		@include('admin.layouts.partials.nav')
		
		<div class="container-fluid">
			<div class="col-md-2">
				<nav class="navmenu navmenu-default offcanvas-sm" id="myNavmenu" role="navigation">
					<a class="navmenu-brand hidden-lg">Main Menu</a>
				  {!! Menu::get('admin.left') !!}
				</nav>
			</div>
			<div class="col-md-10">
				@yield('content')
			</div>
		</div>

		<footer class="container-fluid">
			<div class="col-md-12">
				<hr>
				<p class="pull-left">
					Copyright &COPY; {!! date('Y') !!}. All rights reserved.
				</p>
				<p class="pull-right">
					Thank you for using <a href="https://www.pingpongcms.com">Pingpong CMS</a>
				</p>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="{!! a('components/jquery/dist/jquery.min.js') !!}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{!! a('components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
		<script src="{!! a('components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') !!}"></script>
		@yield('script')
	</body>
</html>