
@extends('layouts.master')

@section('content')
<form method="POST" action="{{ action('PostsController@update', $post->id) }}">
	{{ method_field('PUT') }}
	{!! csrf_field() !!}
	Title: <input type="text" name="title" value="{{ $post->title }}">
	Content: <textarea name="context" rows="5" cols="40">{{ $post->context }}</textarea>
	URL: <input type="text" name="url" value="{{ $post->url }}">
	<input type="submit">
</form>
{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
{!! $errors->first('context', '<span class="help-block">:message</span>') !!}
{!! $errors->first('url', '<span class="help-block">:message</span>') !!}
@stop