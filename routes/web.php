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

Route::get('/', 'FrontendController@home');
Route::get('/about', 'FrontendController@about');
Route::get('/service', 'FrontendController@service');
Route::get('/portfolio', 'FrontendController@portfolio');
Route::get('/contact', 'FrontendController@contact');

Route::resource('/blog', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
