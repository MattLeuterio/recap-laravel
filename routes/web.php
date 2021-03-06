<?php

use Illuminate\Support\Facades\Route;

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
// Home
Route::get('/', 'HomeController@index')->name('home');

// Blog
Route::get('/blog', 'BlogController@index')->name('blog.index-blog');

Route::get('/blog/show/{slug}', 'BlogController@show')->name('blog.show');
