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

Route::view('/', 'pages.home');

Route::view('/posts', 'pages.posts');

Route::view('/about', 'pages.about');

Route::view('/strategic-partnerships', 'pages.strategic-partnerships');


