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

Route::post('address', 'App\Http\Controllers\AddressController@store');
Route::get('address', 'App\Http\Controllers\AddressController@get');
Route::delete('address/{id}', 'App\Http\Controllers\AddressController@delete');
