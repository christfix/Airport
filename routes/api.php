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

Route::group(['prefix' => 'Api'], function () {

    Route::group(['prefix' => 'Data'], function () {

        Route::post('/commit', 'DataController@commit');

        Route::get('/status', 'DataController@status');

    });

    Route::post('/sss', 'DataController@sss');

    Route::get('/alldata', 'DataController@alldata');

});