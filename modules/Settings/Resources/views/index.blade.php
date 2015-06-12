@extends('settings::layouts.master')

@section('content')
	
	<h1>Hello World</h1>
	
	<p>
		This view is loaded from module: {!! trans('settings::settings.name') !!}
	</p>

	{{ config('settings.name') }}

@stop
