@extends('layouts.master')
@section('content')
		<form method="POST" action="{{ action('PostsController@store') }}">
			{!! csrf_field() !!}
			Title: <input type="text" name="title" value="{{ old('title') }}">
			URL: <input type="text" name="url" value="{{ old('url') }}">
			Content: <textarea name="context" rows="5" cols="40">{{ old('context') }}</textarea>
			</textarea>
			<input type="submit">
		</form>
@stop