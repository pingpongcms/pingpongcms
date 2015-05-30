@extends('core::layouts.auth')

@section('title', 'Register')

@section('content')

<div class="login-box">
	<div class="login-logo">
	<a href="#">{!! config('cms.title') !!}</a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Register to get a free account</p>
		@include('core::errors.validation')
	    @include('flash::message')
		<form action="{{ url('auth/register') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group has-feedback">
				<input type="text" name="name" class="form-control" placeholder="Name"/>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="text" name="username" class="form-control" placeholder="Username"/>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="text" name="email" class="form-control" placeholder="Email"/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" placeholder="Password"/>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation"/>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox" name="aggree">
							I aggree with <a href="#">Terms and Condition</a>
						</label>
					</div>
				</div><!-- /.col -->
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
				</div><!-- /.col -->
			</div>
		</form>

		<br>

		<a href="{{ url('password/email') }}">I forgot my password</a><br>
		<a href="{{ url('auth/login') }}" class="text-center">I already have account</a>

	</div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection
