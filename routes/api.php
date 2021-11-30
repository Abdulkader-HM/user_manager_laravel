<?php

use App\Http\Controllers\Api\UserController;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::patch('/profile', [AuthController::class, 'login']);
    Route::post('/profile', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::get('user', 'Api\usersController@index');
    Route::get('user/{id}', 'Api\usersController@show');
    Route::post('user', 'Api\usersController@store');
    Route::put('user/{id}', 'Api\usersController@update');
    Route::delete('user/{id}', 'Api\usersController@delete');
});
