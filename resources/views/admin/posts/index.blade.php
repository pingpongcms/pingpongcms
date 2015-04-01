@extends('admin.layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		<div>
			All
			<a href="{!! route('admin.posts.index') !!}">Posts</a>
			<a href="{!! route('admin.posts.index', ['type' => 'page']) !!}">Pages</a>
		</div>
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('admin.posts.create') !!}" class="btn btn-default">Add New</a>
		</div>
	</div>
	<table class="table table-stripped table-bordered">
		<thead>
			<th class="text-center">#</th>
			<th>Author</th>
			<th>Title</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $post->user->name !!}</td>
					<td>{!! $post->title !!}</td>	
					<td>{!! $post->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['admin.posts.destroy', $post->id]]) !!}
							<a href="{!! route('admin.posts.show', $post->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('admin.posts.edit', $post->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
							<button type="submit" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></button>
							{!! Form::close() !!}
						</div>
					</td>
				</tr>
				<?php $no++; ?>
			@endforeach
		</tbody>
	</table>
	<div class="panel-footer">
		<div class="text-center">{!! $posts !!}</div>
	</div>
</div>
@stop