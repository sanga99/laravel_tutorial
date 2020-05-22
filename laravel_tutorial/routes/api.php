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

Route::get('/test', function () {
    dd('test');
});
Route::resource('/v1/prods', 'Api\v1\Prod\ProdsController');
Route::resource('/v1/pkgs', 'Api\v1\Pkg\PkgsController');
Route::resource('/v1/subscs', 'Api\v1\Subsc\SubscsController');
Route::resource('/v1/vehicles', 'Api\v1\Vehicle\VehiclesController');
// Route::resource('/api/v1/vehicleCats', 'Api\v1\VehicleCats\VehicleCatsController');


// http://192.168.0.189:8082/api/v1/prods