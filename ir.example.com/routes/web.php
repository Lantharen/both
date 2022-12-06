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

/* base  */

Route::view('/', 'pages.home')->name('home');

Route::view('/contact', 'pages.contact')->name('contact');



/* news-events */

Route::view('/news-events', 'pages.news-events')->name('news-events');

Route::view('/news-events/press-releases', 'pages.dropdown-child-news-events.press-releases')->name('news-events.press-releases');

Route::view('/news-events/in-the-news', 'pages.dropdown-child-news-events.in-the-news')->name('news-events.in-the-news');

Route::view('/news-events/ir-calendar', 'pages.dropdown-child-news-events.ir-calendar')->name('news-events.ir-calendar');

Route::view('/news-events/email-alerts', 'pages.dropdown-child-news-events.email-alerts')->name('news-events.email-alerts');

/* company-information */

Route::view('/company-information', 'pages.company-information')->name('company-information');

Route::view('/company-information/presentations', 'pages.dropdown-child-company-info.presentations')->name('company-information.presentations');

Route::view('/company-information/management-team', 'pages.dropdown-child-company-info.management-team')->name('company-information.management-team');

Route::view('/company-information/contacts', 'pages.dropdown-child-company-info.contacts')->name('company-information.contacts');

Route::view('/company-information/faq', 'pages.dropdown-child-company-info.faq')->name('company-information.faq');

Route::view('/company-information/analyst-coverage', 'pages.dropdown-child-company-info.analyst-coverage')->name('company-information.analyst-coverage');

/* financial-information */

Route::view('/financial-information', 'pages.financial-information')->name('financial-information');

Route::view('/financial-information/financial-results', 'pages.dropdown-child-financial-information.financial-results')->name('financial-information.financial-results');

Route::view('/financial-information/income-statement', 'pages.dropdown-child-financial-information.income-statement')->name('financial-information.income-statement');

Route::view('/financial-information/balance-sheet', 'pages.dropdown-child-financial-information.balance-sheet')->name('financial-information.balance-sheet');

Route::view('/financial-information/cash-flow', 'pages.dropdown-child-financial-information.cash-flow')->name('financial-information.cash-flow');

/* stock-data */

Route::view('/stock-data/quote', 'pages.quote')->name('stock-data.quote');

Route::view('/stock-data/charts', 'pages.dropdown-child-quote.charts')->name('stock-data.charts');

Route::view('/stock-data/historical-data', 'pages.dropdown-child-quote.historical-data')->name('stock-data.historical-data');

/* sec-filings */

Route::view('/sec-filings', 'pages.sec-filings')->name('sec-filings');

Route::view('/sec-filings/all-sec-filings', 'pages.dropdown-child-sec-filings.all-sec-filings')->name('sec-filings.all-sec-filings');

Route::view('/sec-filings/annual-reports', 'pages.dropdown-child-sec-filings.annual-reports')->name('sec-filings.annual-reports');

Route::view('/sec-filings/quarterly-reports', 'pages.dropdown-child-sec-filings.quarterly-reports')->name('sec-filings.quarterly-reports');

Route::view('/sec-filings/section-16-filings', 'pages.dropdown-child-sec-filings.section-16-filings')->name('sec-filings.section-16-filings');

/* corporate-governance */

Route::view('/corporate-governance', 'pages.corporate-governance')->name('corporate-governance');

Route::view('/corporate-governance/board-of-directors', 'pages.dropdown-child-corporate-governance.board-of-directors')->name('corporate-governance.board-of-directors');

Route::view('/corporate-governance/board-committees', 'pages.dropdown-child-corporate-governance.board-committees')->name('corporate-governance.board-committees');

Route::view('/corporate-governance/governance-documents', 'pages.dropdown-child-corporate-governance.governance-documents')->name('corporate-governance.governance-documents');

Route::view('/corporate-governance/board-diversity-matrix', 'pages.dropdown-child-corporate-governance.board-diversity-matrix')->name('corporate-governance.board-diversity-matrix');

































































