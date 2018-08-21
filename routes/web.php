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

Route::get('/', 'HomeController@index');

Route::get('/service', 'ServiceController@index');
Route::get('/service/type', 'ServiceController@type');
Route::get('/service/realty', 'ServiceController@realty');

Route::get('/cart', 'CartController@index');

Route::get('/introduction', 'StaticController@introduction');

Route::get('/news', 'NewsController@index');
Route::get('/news/detail', 'NewsController@detail');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/detail', 'BlogController@detail');