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

Route::view('/', 'pages.home')->name('home');

Route::view('/posts', 'pages.posts')->name('posts');

Route::view('/about', 'pages.about')->name('about');

Route::view('/strategic-partnerships', 'pages.strategic-partnerships')->name('strategic-partnerships');

Route::view('/mining', 'pages.mining')->name('mining');

Route::view('/timeline', 'pages.timeline')->name('timeline');

Route::view('/our-facilities', 'pages.our-facilities')->name('our-facilities');

Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');

Route::view('/disclaimer', 'pages.disclaimer')->name('disclaimer');

Route::view('/glossary', 'pages.glossary')->name('glossary');













