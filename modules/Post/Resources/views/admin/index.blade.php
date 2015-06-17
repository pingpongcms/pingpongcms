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
				<th class="text-center">Action</th>
			</thead>
			@foreach ($posts as $post)
				<tr>
					<td>{{ $no }}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->author }}</td>
					<td>{{ $post->created_at }}</td>
					<td class="text-center">
						<div class="btn-group">
							<a class="btn btn-default" href="#!"><i class="fa fa-eye"></i></a>
							<a class="btn btn-default" href="#!"><i class="fa fa-edit"></i></a>
							<a class="btn btn-default" href="#!"><i class="fa fa-times"></i></a>
						</div>
					</td>
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