<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('address', 'AddressController@store');
Route::get('address', 'AddressController@get');
Route::delete('address/{id}', 'AddressController@delete');
Route::put('address/{id}', 'AddressController@update');


Route::post('circle', 'CircleController@store');
Route::get('circle', 'CircleController@get');
Route::delete('circle/{id}', 'CircleController@delete');
Route::put('circle/{id}', 'CircleController@update');
