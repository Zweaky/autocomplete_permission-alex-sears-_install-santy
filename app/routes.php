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
//->before('guest');
Route::get('autos', function()
{
	return View::make('autos');

});
Route::get('autocompleted', function()
{
	return View::make('autod');

});


Route::get('geted','AutoController@index');
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

Route::get('/master', array('uses' => 'PostController@show'));


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
Route::get('reg', array(
	'as'=>'post-add-reg',
	'uses'=>'PostController@getreg'
	)
);
// route to show the login form
// Route::post('login', array('uses' => 'HomeController@doLogin'));
// Route::get('login', array('uses' => 'HomeController@showLogin'));
//->before('guest');

// route to process the form

Route::get('logout', array('uses' => 'HomeController@logout'));
Route::get('start', function()
{
    $subscriber = new Role();
    $subscriber->name = 'Admin';
    $subscriber->save();
 
	$author = new Role();
    $author->name = 'User';
    $author->save();
 
    $read = new Permission();
    $read->name = 'can_read';
    $read->display_name = 'Can Read Posts';
    $read->save();
 
    $edit = new Permission();
    $edit->name = 'can_edit';
    $edit->display_name = 'Can Edit Posts';
    $edit->save();
 
    $subscriber->attachPermission($read);
    $author->attachPermission($read);
    $author->attachPermission($edit);
 
    $user1 = User::find(1);
    $user2 = User::find(2);
 
    $user1->attachRole($subscriber);
    $user2->attachRole($author);
 
    return 'Woohoo!';
});
Route::get('secret', function()
{
    Auth::loginUsingId(1);
 
    $user = Auth::user();
 
    if ($user->hasRole('Admin'))
    {
        return 'Redheads party the hardest!';
    }
 
    return 'Many people like to party.';
});

Route::get('avail', function()
{
    return View::make('helpers/avail');

});