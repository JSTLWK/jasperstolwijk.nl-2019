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
     * Route for the projects to show on the homepage.
     */
    Route::prefix('/portfolio')->group(function () {
        Route::resource('projects', 'Api\PortfolioController')->names([
            'index' => 'api.projects'
        ]);
        Route::post('contact', 'Api\PortfolioController@sendEmail')->name('api.portfolio.contact');

    });
});

