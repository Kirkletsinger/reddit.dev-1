@extends('layouts.master')
@section('content')
	<h3>Welcome to your account : {{ Auth::user()->name }}</h3>
	<h3>Your email  : {{ Auth::user()->email }}</h3>
	<section id="Posts">
		<div class="row">
			<div class="col-md-12">
				<h3 class="row-title">Your Posts</h3>
			</div>
		</div>
		<!-- <div class="row"> -->
			<!--Foreach through user's items don't forget columns(keys) for sodas -->
			@foreach ($particularPost as $post)
				<div class="col-md-4 img-box">
					<h3 class="text-center post-item">{{ $post->title }}</h3>
					<p class="text-center post-item">{{ $post->url }}</p>
					<p class="text-center post-item">{{ $post->context }}</p>
					<p class="text-center post-item">{{ $post->created_by }}</p>

				</div>
			@endforeach
	</section>
@stop