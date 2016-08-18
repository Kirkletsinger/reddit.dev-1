
@extends('layouts.master')

@section('content')
<form method="POST" action="{{ action('PostsController@store') }}">
	{!! csrf_field() !!}
	Title: <input type="text" name="title" value="{{ old('title') }}">
	Content: <textarea name="context" rows="5" cols="40">{{ old('context') }}</textarea>
	URL: <input type="text" name="url" value="{{ old('url') }}">
	<input type="submit">
</form>
{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
{!! $errors->first('context', '<span class="help-block">:message</span>') !!}
{!! $errors->first('url', '<span class="help-block">:message</span>') !!}
@stop