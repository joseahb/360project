<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/marketing', [HomeController::class, 'marketing']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/recent', [HomeController::class, 'recent']);
Route::get('/all-sites', [HomeController::class, 'all_sites']);
