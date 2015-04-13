@extends('default::layouts.master')

@section('content')

@foreach ($posts as $post)
<div class="blog-post">
	<h2 class="blog-post-title">{{ $post->title }}</h2>
	<p class="blog-post-meta">{{ $post->published_at->format('M d, Y') }} by <a href="#">{{ $post->user->name }}</a></p>
	<article>
		{{ nl2br($post->body) }} <a href="{{ $post->url }}">Read more...</a>
	</article>
</div><!-- /.blog-post -->
@endforeach

<nav class="text-center">
	{!! $posts !!}
</nav>

@stop