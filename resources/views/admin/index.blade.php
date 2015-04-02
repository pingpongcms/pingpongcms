@extends('admin.layouts.master')

@section('content')

<div class="row">
	<div class="col-md-3">	
		<div class="panel panel-widget panel-default">
			<div class="panel-icon bg-orange">
				<i class="fa fa-book fa-4x"></i>
			</div>
			<div class="panel-body panel-widget-content">
				<h3>{{ App\Post::type('post')->count() }} Posts</h3>
			</div>
		</div>
	</div>
	<div class="col-md-3">	
		<div class="panel panel-widget panel-default">
			<div class="panel-icon bg-midnight-blue">
				<i class="fa fa-flag fa-4x"></i>
			</div>
			<div class="panel-body panel-widget-content">
				<h3>{{ App\Post::type('page')->count() }} Pages</h3>
			</div>
		</div>
	</div>
	<div class="col-md-3">	
		<div class="panel panel-widget panel-default">
			<div class="panel-icon bg-green-sea">
				<i class="fa fa-users fa-4x"></i>
			</div>
			<div class="panel-body panel-widget-content">
				<h3>{{ App\User::count() }} Users</h3>
			</div>
		</div>
	</div>
	<div class="col-md-3">	
		<div class="panel panel-widget panel-default">
			<div class="panel-icon bg-alizarin">
				<i class="fa fa-tags fa-4x"></i>
			</div>
			<div class="panel-body panel-widget-content">
				<h3>{{ App\Tag::count() }} Tags</h3>
			</div>
		</div>
	</div>
</div>

@stop