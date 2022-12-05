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

Route::view('/contact', 'pages.contact')->name('contact');

Route::view('/corporate-governance', 'pages.corporate-governance')->name('corporate-governance');

Route::view('/sec-filings', 'pages.sec-filings')->name('sec-filings');

Route::view('/stock-data/quote', 'pages.quote')->name('stock-data.quote');

Route::view('/financial-information', 'pages.financial-information')->name('financial-information');

Route::view('/company-information', 'pages.company-information')->name('company-information');

Route::view('/news-events', 'pages.news-events')->name('news-events');










