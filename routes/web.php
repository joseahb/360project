<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/marketing', [HomeController::class, 'marketing']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/recent', [HomeController::class, 'recent']);
Route::get('/all-sites', [HomeController::class, 'all_sites']);

Route::post('/login', [LogginController::class, 'Auth\RegisterController@login'])->name('admin.login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin'], 'prefix' => 'a', 'as' => 'admin.'], function () {

    });
    Route::group(['middleware' => ['app-user'], 'prefix' => 'a', 'as' => 'user.'], function () {

    });
});
