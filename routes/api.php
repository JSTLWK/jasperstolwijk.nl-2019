<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('throttle:30|60,1')->prefix('v1')->group(function () {


    Route::post('/', function (Request $request) {

        $destinationPath = 'ss';

        $file = $request->file('sharex');
        $random_string = Str::random(5);

        $filename = $random_string.$file->getMimeType();

        $file->moveAs($destinationPath, $filename);

    })->name('sharex.api');

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

