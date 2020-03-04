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

Route::post('register', 'Api\Auth\RegisterController@register');
Route::post('login', 'Api\Auth\LoginController@login');

Route::get('materials/get', 'Api\MaterialsController@get');
Route::delete('materials/delete', 'Api\MaterialsController@delete');
Route::post('takes/create', 'Api\TakesController@create');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
