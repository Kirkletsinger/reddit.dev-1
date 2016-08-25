@extends('layouts.master')

@section('content')
 <form method="POST" action="{{ action('ProfileController@store')}}" class="search-form">
	{!! csrf_field() !!}
	<div class="control-group">
    <label class="control-label"  for="name">Username</label>
    <div class="controls">
        <input type="text" id="name" name="name" placeholder="" value="{{ old('name') }}" class="form-control">
        @if ($errors->has('name'))
        	<p class="help-block">{{ $errors->first('name')}} </p>
        @endif
    </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="email">E-mail</label>
        <div class="controls">
            <input type="text" id="email" name="email" placeholder="" value="{{ old('email') }}" class="form-control">
            @if ($errors->has('email'))
	        	<p class="help-block">{{ $errors->first('email')}} </p>
	        @endif
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" id="password" name="password" placeholder="" class="form-control">
            @if ($errors->has('password'))
	        	<p class="help-block">{{ $errors->first('password')}} </p>
	        @endif
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"  for="password_confirmation">Password (Confirm)</label>
        <div class="controls">
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="form-control">
            @if ($errors->has('password_confirmation'))
	        	<p class="help-block">{{ $errors->first('password_confirmation')}} </p>
	        @endif
        </div>
    </div>
    <input type="submit">
</form>

@stop