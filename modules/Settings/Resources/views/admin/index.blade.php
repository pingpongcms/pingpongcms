@extends('core::layouts.master')

@section('title', 'Settings')

@section('content')

{!! Form::open() !!}
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Site Settings</h3>
		<div class="box-tools pull-right">
			<!-- Buttons, labels, and many other things can be placed here! -->
			<!-- Here is a label for example -->
			{{-- <span class="label label-primary">Label</span> --}}
		</div><!-- /.box-tools -->
	</div><!-- /.box-header -->
	<div class="box-body">
		<div class="form-group">
			{!! Form::label('site_name', 'Name') !!}
			{!! Form::text('settings[site.name]', setting('site.name'), ['class' => 'form-control', 'id' => 'site_name']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('site_description', 'Description') !!}
			{!! Form::textarea('settings[site.description]', setting('site.description'), ['class' => 'form-control', 'id' => 'site_description']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('site_keywords', 'Keywords') !!}
			{!! Form::text('settings[site.keywords]', setting('site.keywords'), ['class' => 'form-control', 'id' => 'site_keywords']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('site_author', 'Author') !!}
			{!! Form::text('settings[site.author]', setting('site.author'), ['class' => 'form-control', 'id' => 'site_author']) !!}
		</div>
	</div><!-- /.box-body -->
	<div class="box-footer">
		<button class="btn btn-primary" type="submit">Save</button>
	</div><!-- box-footer -->
</div><!-- /.box -->
{!! Form::close() !!}

@stop
