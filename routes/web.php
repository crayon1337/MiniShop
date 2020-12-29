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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/shop', function() {
        return view('shop');
    })->name('shop');

    Route::get('/about', function() {
        return view('about');
    })->name('about');

    Route::get('/contact', function() {
        return view('contact');
    })->name('contact');
});