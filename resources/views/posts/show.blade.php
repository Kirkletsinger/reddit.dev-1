@extends('layouts.master')
@section('content')
	<h3>Welcome to your account : {{ Auth::user()->name }}</h3>
	<h3>Welcome to your account : {{ Auth::user()->email }}</h3>
	<section id="Posts">
		<div class="row">
			<div class="col-md-12">
				<h3 class="row-title">Your Posts</h3>
			</div>
		</div>
		<div class="row">
			<!--Foreach through user's items don't forget columns(keys) for sodas -->
			@foreach ($particularPost as $post)
				<div class="col-md-4 img-box">
					<!-- echo Post Name -->
					<h3 class="text-center post-item">{{ $post->title }}></h3>
					<!-- echo Post URL -->
					<p class="text-center post-item">{{ $post->url }}></p>
					<!-- echo Post Description-->
					<p class="text-center post-item">{{ $post->context }}></p>
					<!-- echo image(if possible) -->
				</div>
			@endforeach
	</section>
@stop