<?php

use App\Http\Controllers\Api\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('index', 'Api\usersController@index');
Route::get('show/{id}', 'Api\usersController@show');
Route::post('create', 'Api\usersController@store');
Route::put('update/{id}', 'Api\usersController@update');
Route::delete('delete/{id}', 'Api\usersController@delete');
