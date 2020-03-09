<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/','CommentController@index');

Route::get ('/comment/{comment}/', 'CommentController@show');

Route::get('/comment/{comment}/edit/', 'CommentController@edit');
Route::post('/comment/{comment}/edit/', 'CommentController@update');

Route::get ('/comment/{comment}/upvote/', 'LikesController@upVote');
Route::get ('/comment/{comment}/downvote/', 'LikesController@downVote');
