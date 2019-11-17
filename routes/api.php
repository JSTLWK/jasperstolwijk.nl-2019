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
Route::prefix('v1', function () {


    Route::prefix('portfolio')->group(function () {

        /**
         * Route for the projects to show on the homepage.
         */
        Route::resource('projects','Api/ProjectsController');


    });

});
