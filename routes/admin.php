<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::group(['middleware' => 'auth', 'middleware' => 'is_admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('dashboard', 'AdminController');
});