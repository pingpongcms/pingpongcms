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

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			body {padding-top: 60px};
		</style>
		@yield('style')
	</head>
	<body>
		@include('admin.layouts.partials.nav')
		
		<div class="container">
			@yield('content')
		</div>

		<!-- jQuery -->
		<script src="{!! asset('components/jquery/dist/jquery.min.js') !!}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{!! asset('components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
		@yield('script')
	</body>
</html>