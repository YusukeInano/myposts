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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('post/create', 'Admin\PostController@add');
    Route::post('post/create', 'Admin\PostController@create');
    Route::get('post/edit', 'Admin\PostController@edit');
    Route::post('post/edit', 'Admin\PostController@update');
    Route::get('post/delete', 'Admin\PostController@delete');
    Route::get('index', 'Admin\PostController@index');
    
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/creat', 'Admin\ProfileController@create');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', 'MapController@showMap');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
