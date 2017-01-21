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
Route::get('/bloghome','MeqaleController@index');

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

Route::get('/mlgroup',function(){
		return view('admin.login');
});

Route::post('/mlgroupcheck','adminController@login');

if(isset($_SESSION['admin'])){
	Route::get('/mlgrouppanel',function(){
		return view('admin.dashboard');
	});
	// ---------------------------ADMIN PANEL ROUTES----------------------------------
	Route::get('/mlgrouppanel-logout','adminController@logout');
	Route::get('/mlgrouppanel-users','adminController@users');
	Route::get('/mlgrouppanel-posts','adminController@posts');

		Route::get('/mlgrouppanel-changestatus/{id}','adminController@changeStatus');
		Route::get('/mlgrouppanel-banuser/{id}','adminController@banUser');
		Route::get('/mlgrouppanel-permituser/{id}','adminController@permitUser');

		Route::get('/mlgrouppanel-banpost/{id}','MeqaleController@banPost');
		Route::get('/mlgrouppanel-permitpost/{id}','MeqaleController@permitPost');
		Route::get('/mlgrouppanel-showpost/{id}','MeqaleController@showPost');
}

if(isset($_SESSION['user_type'])){
	if($_SESSION['user_type']=='1' || $_SESSION['user_type']=='0'){
		Route::post('/newpost','userController@meqaleYaz');
		Route::get('/showpost/{id}','userController@showPost');
		Route::post('/leavecomment/{id}','CommentController@leaveComment');
		Route::post('/replycomment/{id}/{ci}','CommentController@replyComment');
	}
}

