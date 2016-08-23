
@extends('layouts.master')

@section('content')
	<table>
		<tr>
			<th>User Name</th>
			<th>Title</th>
			<th>URL</th>
			<th>Context</th>
			<th>Time Stamp</th>
		</tr>
			@foreach ($posts as $post)
			<tr>
				<td> {{ $post->user->name }}</td>
				<td> {{ $post->title }} </td>
				<td> {{ $post->url }} </td>
				<td> {{ $post->context }} </td>
				<td>Time Stamp
					{!! $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A'); !!}
				</td>
				<td>
					<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
						{{ method_field('DELETE') }}
						{!! csrf_field() !!}
					 <button type="submit">DELETE</button>				
					</form>
				</td>
				<td>
				<a href="{{ action('PostsController@edit', $post->id) }}">Edit</a>  
				</td>

			</tr>
			@endforeach
	</table>
	<div class="col-md-4 col-md-offset-4">
	{!! $posts->render() !!}
	</div>
@stop