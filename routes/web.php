<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', 'CucumberController@index');

Route::get('/customer/{cucumber}', 'CucumberController@show');

Route::get('/producer', 'CucumberController@showcounties');

Route::get('/customer/country/{id}', 'CucumberController@showcucumbersfromcounty');

Route::post('producer/create', 'CucumberController@create');

Route::get('/customer/delete/{id}', 'CucumberController@destroy');