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

Route::group([
  'prefix' => 'v1', 
  'as' => 'api.', 
  'namespace' => 'Api\
  \Admin', 
  'middleware' => ['auth:api']
], function () {
    Route::apiResource('projects', 'ProjectsApiController');
});

Route::get('/docs/L5_SWAGGER_CONST_HOST/projects', function () {
    return 'API';
});


Route::post('/docs/L5_SWAGGER_CONST_HOST/login', 'Api\CustController@index');

Route::post('/docs/L5_SWAGGER_CONST_HOST/list', 'Api\CustController@list');
