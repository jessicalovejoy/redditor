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



Auth::routes();

Route::get('/', 'PostsController@index');
Route::get('/home', 'HomeController@index');

// Subreddit routes
Route::get('/subreddits', 'SubredditController@index');
Route::get('/r/{subreddit_name}', 'SubredditController@show');
Route::get('/subreddit/new', 'SubredditController@create');
Route::post('subreddit/new', 'SubredditController@store');
Route::get('/r/{subreddit_name}/edit', 'SubredditController@update');
Route::post('/r/{subreddit_name}/edit', 'SubredditController@store');
Route::post('/r/{subreddit_name}/delete', 'SubredditController@destroy');





