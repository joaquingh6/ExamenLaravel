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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('/post', 'PostController');
Route::resource('/tag', 'TagController');
Route::resource('/message', 'MessageController');
Route::resource('/category', 'CategoryController');
Route::resource('/user', 'UserController');
Route::resource('/message', 'MessageController');
Route::get('/postadmin' , 'PostController@postadmin')->name('postadmin');
Route::get('/tagadmin' , 'TagController@tagadmin')->name('tagadmin');
Route::get('/categoryadmin' , 'CategoryController@categoryadmin')->name('categoryadmin');
Route::get('/useradmin' , 'UserController@useradmin')->name('useradmin');
Route::get('/perfil' , 'UserController@perfil')->name('perfil');
