@extends('layouts.master')
@section('content')
    <h1>Word entered, {{ $word }}!</h1>
    <h1>Word capitalized  {{ $upper }}!</h1>
@stop

<!-- <p>
	<a href="{{ action('HomeController@increment', ['number' => 5]) }}">Increasse number</a>
</p> -->