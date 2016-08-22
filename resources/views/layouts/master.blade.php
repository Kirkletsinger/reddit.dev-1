<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
		<div class="navi">
			<ul>
				<li><a href="{{ action('PostsController@index') }}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
				<li><a href="{{ action('HomeController@accountView') }}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Account</span></a></li>				
				<li><a href="{{ action('PostsController@create') }}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Post</span></a></li>
				<li><a href="{{ action('Auth\AuthController@getLogout') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
			</ul>
		</div>
	</div>
	<div class="user-dashboard">
		<h1>REDDIT REPLICA</h1>
		<div class="row">
		</div>
	</div>
	 @if (session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
	@endif
    @yield('content')
</body>
</html>