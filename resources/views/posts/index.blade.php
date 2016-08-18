
@extends('layouts.master')

@section('content')
	<table>
@foreach ($posts as $post)
	<h3>Title</h3>
	<div> {{ $post->title }} </div>
	<h3>URL</h3>
	<div> {{ $post->url }} </div>
	<h3>Context</h3>
	<div> {{ $post->context }} </div>
	<br>
	<h4>Time Stamp</h4>
		{!! $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A'); !!}
	<div>----</div>
@endforeach
	{!! $posts->render() !!}
@stop