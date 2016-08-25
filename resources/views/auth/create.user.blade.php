@extends('layouts.master')

@section('content')
<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
	{!! csrf_field() !!}
	<label>Email</label>
	<input type="text" name="email" value="{{ old('email') }}">
	<label>Password</label>
	<input type="password" name="password" value="{{ old('password') }}">
	<input type="submit">
</form>
{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
@stop