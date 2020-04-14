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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('portfolio');
});

Route::prefix('/sharex')->group(function () {

    Route::get('/login', 'ShareXController@login')->name('sharex.login');
    Route::post('/login', 'ShareXController@loginCheck');

    Route::group(['middelware' => 'auth'], function() {
        Route::post('/deleteImage/{domain}/{id}', 'ShareXController@deleteImage')->name('sharex.deleteImage');
        Route::get('/dashboard', 'ShareXController@index')->name('sharex.dashboard');
        Route::get('/docs', 'ShareXController@docs')->name('sharex.docs');
        Route::get('/gallery', 'ShareXController@gallery')->name('sharex.gallery');
        Route::get('/user', 'ShareXController@allImages')->name('sharex.user');

        Route::get('/admin/dashboard', 'ShareXController@adminIndex')->name('sharex.admin.dashboard');
    });

    Route::get('/register', 'ShareXController@register')->name('sharex.register');
    Route::post('/register', 'ShareXController@createRegister');
});

Route::get('/school/stageverslag-lennyclub', function () {
    return view('school.verslag-lennyclub');
});
