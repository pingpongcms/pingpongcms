@extends('core::layouts.auth')

@section('title', 'Password Reminder')

@section('content')

<div class="login-box">
	<div class="login-logo">
	<a href="#">{!! config('cms.title') !!}</a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Password Reset</p>
		@include('core::errors.validation')
	    @include('flash::message')
		<form action="{{ url('password/reset') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="token" value="{{ $token }}">
			<div class="form-group has-feedback">
				<input type="text" name="email" class="form-control" placeholder="Email"/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" placeholder="Password"/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation"/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">
						Reset Password
					</button>
				</div><!-- /.col -->
			</div>
		</form>

		<a href="{{ url('password/email') }}">I forgot my password</a><br>
		<a href="{{ url('auth/register') }}" class="text-center">Register a new membership</a>

	</div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection
