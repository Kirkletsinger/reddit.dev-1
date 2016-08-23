
@extends('layouts.master')

@section('content')
	
    <div class="container-fluid">
    	<div class="row">
	    	<div class="col-md-4 col-md-offset-3">
	            <form method="GET" action="{{ action('PostsController@index') }}" class="search-form">
	               <div class="form-group">
					  <label for="sel1">Select list:</label>
					  <select class="form-control" name="searchBy" id="searchBy">
					    <option>User</option>
					    <option>Title</option>
					    <option>URL</option>
					    <option>Context</option>
					  </select>
					  <input type="text" name="searchedOption">Search</input>
					</div>
	            </form>
	        </div>
    	</div>
    	<div class="row">
			<table>
				<thead>
					<th>User Name</th>
					<th>Title</th>
					<th>URL</th>
					<th>Context</th>
					<th>Time Stamp</th>
				</thead>
				<tbody>
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
				</tbody>
				<tfoot>
				<td colspan='5' class="text-center">{!! $posts->render() !!}</td>
				</tfoot>
			</table>
    	</div>
	</div>
@stop