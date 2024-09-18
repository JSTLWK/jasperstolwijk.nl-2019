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


Route::get('/', function () {
    return view('portfolio');
})->name('portfolio.home');

Route::get('/about', function () {
    return view('about');
})->name('portfolio.about');

Route::get('/thank-you-arthur', static function () {
    return view('thank-you-arthur');
})->name('thank_you.arthur');


Route::get('/school/stageverslag-lennyclub', function () {
    return view('school.verslag-lennyclub');
});
