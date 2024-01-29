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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/banners', 'App\Http\Controllers\BannerController@index')->name('banners.index');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@showPost')->name('post.show');
