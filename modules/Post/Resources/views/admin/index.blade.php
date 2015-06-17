@extends('core::layouts.master')

@section('title', 'Posts')

@section('content')
	
	<div class="box">
		<div class="box-header with-border">
			<div class="box-title">
				Posts
			</div>
			<div class="box-tools pull-right">
				<a class="btn-box-tool" href="{{ cms()->route('posts.create') }}">
					<i class="fa fa-plus"></i>
					Add New
				</a>
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<th width="5%" class="text-center">#</th>
				<th>Title</th>
				<th>Author</th>
				<th>Created At</th>
			</thead>
			@foreach ($posts as $post)
				<tr>
					<td>{{ $no }}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->author }}</td>
					<td>{{ $post->created_at }}</td>
				</tr>
			@endforeach
		</table>
		<div class="box-footer">
			<div class="text-center">
				{!! $posts->render() !!}
			</div>
		</div>
	</div>

@stop