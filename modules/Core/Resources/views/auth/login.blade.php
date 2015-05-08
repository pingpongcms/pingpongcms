@extends('core::layouts.auth')

@section('title', 'Login')

@section('content')

<div class="login-box">
	<div class="login-logo">
	<a href="#"><b>Pingpong</b> CMS</a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>
		@include('core::errors.validation')
		<form action="{{ url('auth/login') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group has-feedback">
				<input type="text" name="email" class="form-control" placeholder="Email"/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" placeholder="Password"/>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox" name="remember"> Remember Me
						</label>
					</div>
				</div><!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div><!-- /.col -->
			</div>
		</form>

		<a href="{{ url('password/email') }}">I forgot my password</a><br>
		<a href="{{ url('auth/register') }}" class="text-center">Register a new membership</a>

	</div><!-- /.login-box-body -->
</div><!-- /.login-box -->
@endsection
