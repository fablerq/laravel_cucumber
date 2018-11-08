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

Route::get('/customer/{cucumber}', 'CucumberController@show');

Route::get('/customer/country/{id}', 'CucumberController@showcucumbersfromcounty');

Route::post('producer/create', 'CucumberController@create');

Route::get('/customer/delete/{id}', 'CucumberController@destroy');

Route::get('/customer', 'CucumberController@index');

Route::get('/producer', 'CucumberController@showcounties');
