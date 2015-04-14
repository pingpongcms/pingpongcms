@extends('default::layouts.master')

@section('content')

	<div class="blog-post">
		<h2 class="blog-post-title">{{ $post->title }}</h2>
		<p class="blog-post-meta">{{ $post->published_at->format('M d, Y') }} by <a href="#">{{ $post->user->name }}</a></p>
		<article>
			{{ nl2br($post->body) }}
		</article>
	</div><!-- /.blog-post -->

@stop