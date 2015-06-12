@extends('core::layouts.master')

@section('title', 'Add New Post')

@section('content')
	
	{!! Form::open(['files' => true, 'url' => cms()->route('posts.store')]) !!}
	<div class="row">
		<div class="col-md-8">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Post Contents</h3>
					<div class="box-tools pull-right"></div>
				</div>
				<div class="box-body">
					<div class="form-group">
						{!! Form::label('title', 'Title:') !!}	
						{!! Form::text('title', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('slug', 'URI Slug:') !!}	
						{!! Form::text('slug', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('body', 'Contents:') !!}	
						{!! Form::textarea('body', null, ['id' => 'editor', 'class' => 'form-control']) !!}
					</div>
				</div>
			</div>			
		</div>
		<div class="col-md-4">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Publishing</h3>
					<div class="box-tools pull-right"></div>
				</div>
				<div class="box-body">
					<div class="checkbox">
						<label>
							{!! Form::checkbox('save_as_draft', 1) !!}
							Save as draft
						</label>
					</div>
				</div>
				<div class="box-footer">
					<button class="btn btn-primary btn-block" type="submit">
						Publish
					</button>
				</div>
			</div>
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Featured Image</h3>
					<div class="box-tools pull-right"></div>
				</div>
				<div class="box-body">
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 325px; height: 225px;">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 350px; max-height: 350px;"></div>
					  <div>
					    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
					    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}

@stop

@section('script')
	<script src="{{ Module::asset('core:components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
	<script src="//cdn.jsdelivr.net/editor/0.1.0/editor.js"></script>
	<script src="//cdn.jsdelivr.net/editor/0.1.0/marked.js"></script>
	<script>
	$(function () {
		new Editor({
		  element: document.getElementById('editor'),
		});
	});
	</script>
@stop

@section('style')
	<link rel="stylesheet" href="{{ Module::asset('core:components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/editor/0.1.0/editor.css">
@stop