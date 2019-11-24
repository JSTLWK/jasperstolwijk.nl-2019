<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('throttle:30|60,1')->prefix('v1/portfolio')->group(function () {

    /**
     * Route for the projects to show on the homepage.
     */
    Route::resource('projects', 'Api\PortfolioController')->names([
        'index' => 'api.projects'
    ]);
    Route::post('contact', 'Api\PortfolioController@sendEmail')->name('api.portfolio.contact');

});

