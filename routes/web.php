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

Route::get('/', 'PostsController@index')->name('home');
Route::get('post/{post_id}','PostsController@show');
Route::get('posts/create','PostsController@create');
Route::post('/','PostsController@store');
Route::post('post/{id}/comment','commentController@store');



Route::get('/register','registerController@create');
Route::post('/register','registerController@store');
Route::post('user/login','sessionController@create');
Route::get('/logout','sessionController@destroy');
