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


Route::get('/page1', 'Page1Controller@PageView' )->name('page1');

Route::get('/page2', 'Page2Controller@PageView' )->name('page2');

Route::get('/page3', 'Page3Controller@PageView' )->name('page3');

Route::get('/page4', 'Page4Controller@PageView' )->name('page4');

Route::get('/quotes', 'QuotesController@makeQuote')->name('quotes');






