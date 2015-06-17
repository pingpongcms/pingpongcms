@extends('core::layouts.master')

@section('title', 'Edit Post')

@section('content')
	
	{!! Form::model($post, ['files' => true, 'url' => cms()->route('posts.update', $id)]) !!}
	@include('post::admin.form')
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