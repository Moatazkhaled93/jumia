<?php

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

use Illuminate\Support\Facades\Artisan;

//Route::post('/git-deploy', function () {
//    Artisan::call("git:deploy");
//    exit;
//});

Route::middleware('guest')->group(function () {
    // @TODO: Login not required as there is a oauth endpoint oauth/token to request tokens for accessing the API using username/password
    Route::get('phones', 'Api\PhonesController@index')->name('phones');
    Route::get('phones/{id}', 'Api\PhonesController@show')->name('phones');
    Route::post('phones', 'Api\PhonesController@store')->name('phones');
    Route::put('phones/{id}', 'Api\PhonesController@update')->name('phones');
    Route::delete('phones/{id}', 'Api\PhonesController@destroy')->name('phones');
    

});
