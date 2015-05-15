@extends('core::layouts.auth')

@section('title', 'Password Reminder')

@section('content')

<div class="login-box">
	<div class="login-logo">
	<a href="#"><b>Pingpong</b> CMS</a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Password Reminder</p>
		@include('core::errors.validation')
	    @include('flash::message')
		<form action="{{ url('password/email') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group has-feedback">
				<input type="text" name="email" class="form-control" placeholder="Email"/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">
						Send Password Reset Link
					</button>
				</div><!-- /.col -->
			</div>
		</form>

		<a href="{{ url('password/email') }}">I forgot my password</a><br>
		<a href="{{ url('auth/register') }}" class="text-center">Register a new membership</a>

	</div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection
