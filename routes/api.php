<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('throttle:120,1')->prefix('/v1')->group(function () {

    /**
     * Route for the Sharex/screenshot function on this webpage.
     */
    Route::prefix('/sharex')->group(function () {
        Route::post('/create', 'Api\ShareXController@create')->name('api.sharex');
        Route::get('/gettoken', 'Api\ShareXController@generateToken')->name('api.sharex.gettoken');
        Route::get('/latestnews', 'Api\ShareXController@latestNews')->name('api.sharex.latestnews');
        Route::get('/getnewToken', 'Api\ShareXController@generateToken')->name('api.sharex.gettoken');
        Route::get('/stats/{domain}', 'Api\ShareXController@showScreenshots')->name('api.sharex.stats');
    });

    /**
     * Hypixel date/days of being part of the team.
     */

    Route::get('/minecraft/{username}', 'Api\MinecraftController@show')->name('minecraft.stats');
    Route::get('/minecraft/{username}/img', 'Api\MinecraftController@showImage')->name('minecraft.stats');


    /**
     * Route for the projects to show on the homepage.
     */
    Route::prefix('/portfolio')->group(function () {
        Route::resource('projects', 'Api\PortfolioController')->names([
            'index' => 'api.projects'
        ]);
        Route::post('contact', 'Api\PortfolioController@sendEmail')->name('api.portfolio.contact');

    });
});

