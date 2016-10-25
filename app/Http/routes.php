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

Route::get('/',['as' => 'home', 'uses' => 'PostController@index']);

Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//
Route::get('/upload', function() {
  return View::make('/upload');
});

Route::post('apply/upload', 'ApplyController@upload');
Route::get('/mytracks', 'ViewTrackController@viewAllTracks');

Route::get('/playlist','PlaylistController@playlist');
Route::post('/playlist','PlaylistController@playlist');
//
Route::group(['middleware' => ['auth']], function()
{
	// show new post form
	Route::get('new-post','PostController@create');
	//
	Route::get('error','PostController@error');
	//
	
	// save new post
	Route::post('new-post','PostController@store');
	
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	
Route::get("/sortDate",'SortDateController@sorting');
	// update post
	Route::post('update','PostController@update');
	
	// delete post
	Route::get('delete/{id}','PostController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	
	
	// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');
	
});


Route::post('/searchUser','SearchUserController@searching');
Route::get('/searchUser','SearchUserController@searching');

Route::post('/searchSong','SearchSongController@searching');
Route::get('/searchSong','SearchSongController@searching');
//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');

//Route::get('product/like/{id}', ['as' => 'comment.like', 'uses' => 'LikeController@likeComment']);

Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);

//view member profile after search by name
Route::get('/viewProfile/{result}', 'GetController@viewProfile');
