<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome'); 

Route::get('/sayhello', function(){
	return 'OMFG';
});

Route::get('/sayhello/{name?}', function($name = "Arsenal"){
	return "Hello, $name!";
});

// Route::get('/uppercase/{word}', function ($word) {
// 	$data = [
// 		'word' => $word,
// 		'upper' => strtoupper($word),
// 	];
// 	return view('uppercase', $data); 
// });
Route::get('/uppercase/{word?}', 'HomeController@upperCase');

Route::get('/increment/{number?}', 'HomeController@incrementThis');


Route::get('/add/{number1}/{number2}', function ($number1, $number2) {
	return $number1 + $number2;
});

Route::get('/sayhello/{name}', function($name)
{
    return view('my-first-view');
});

// Route::get('/rolldice/{guess}', function($guess)
// {
// 	$data = array('number' => mt_rand(1,6), 
// 		'guess' => $guess);
// 	return view('roll-dice', $data);
// });

Route::get('/rolldice/{guess}', 'HomeController@rollDice');

Route::resource('posts', 'PostsController');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');





