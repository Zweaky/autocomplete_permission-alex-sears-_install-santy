<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');

});
Route::post('/', array(
	'as'=>'post-login-teacher',
	'uses'=>'HomeController@doLogin'
	)
);
Route::post('register', array(
	'as'=>'post-login-student',
	'uses'=>'PostController@postAdd'
	)
);

Route::get('master', function()
{
	return View::make('master');

});
Route::get('read', 'HomeController@read');
// Route::get('master', function()
// {
// 	return View::make('master');
// });
// Route::controller('users', 'PostController');

Route::resource('student','StudentController');
Route::resource('teacher','TeacherController');

Route::get('master', array('as' => 'home', function () { 
return View::make('master');
}));

// Route::get('master', function()
// {
// 	return View::make('master');

// });
// Route::get('/Datatable', function() {
//     return View::make('subscriber_view');
// })

Route::post('teacher', array(
	'as' => 'teacher',
	'uses'=>'TeacherController@show'
	)
);
Route::post('teachers', array(
	'as' => 'teachers',
	'uses'=>'TeacherController@update'
	)
);
Route::post('register', array(
	'as'=>'post-add-register',
	'uses'=>'PostController@postAdd'
	)
);
Route::get('register', array(
	'as'=>'post-add-get',
	'uses'=>'PostController@getAdd'
	)
);
// route to show the login form
// Route::post('login', array('uses' => 'HomeController@doLogin'));
// Route::get('login', array('uses' => 'HomeController@showLogin'));
//->before('guest');

// route to process the form

Route::get('logout', array('uses' => 'HomeController@logout'));

