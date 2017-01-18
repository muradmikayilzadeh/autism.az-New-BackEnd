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
session_start();
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/bloghome', function () {
    return view('pages.bloghome');
});

Route::get('/blogpost', function () {
    return view('pages.blogpost');
});

Route::get('/myprofile', function () {
    return view('pages.myprofile');
});


// Register and login-----------------------------------------------
Route::post('/register','userController@register');
Route::post('/login','userController@login');
Route::get('/logout','userController@logout');


if(isset($_SESSION['user'])){
	Route::get('/myprofile','userController@myProfile');
	Route::post('/changes','userController@saveChanges');
}

