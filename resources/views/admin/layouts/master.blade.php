<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel</title>
		@yield('head')
		<!-- Bootstrap CSS -->
		<link href="{!! asset('components/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') !!}" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			body {padding-top: 60px}
			.navmenu {
				width: 100%;
			}
			@media(max-width: 767px) {
				.navmenu {
					position: fixed;
					top: 0;
					bottom: 0;
					z-index: 1030;
					overflow-y: auto;
					border-radius: 0;right: auto;
					left: 0;
					border-width: 0 1px 0 0;
					width: 250px;
				}
				.navbar-header > .navbar-brand {
				  width: 70%;
				  text-align: center;
				}
			}
		</style>
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
					Copyright &COPY; {{ date('Y') }}. All rights reserved.
				</p>
				<p class="pull-right">
					Thank you for using <a href="https://www.pingpongcms.com">Pingpong CMS</a>
				</p>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="{!! asset('components/jquery/dist/jquery.min.js') !!}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{!! asset('components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
		<script src="{!! asset('components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') !!}"></script>
		@yield('script')
	</body>
</html>