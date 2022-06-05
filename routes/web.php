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

Route::get('/new-developments', [HomeController::class, 'new_developments']);
Route::get('/previous-projects', [HomeController::class, 'previous_projects']);
Route::get('/all-sites', [HomeController::class, 'all_sites']);
Route::get('/all-sites-zoomed', [HomeController::class, 'all_sites_zoomed']);

Route::get('/bellingham-mews', [HomeController::class, 'bellingham_mews']);
Route::get('/disclaimer', [HomeController::class, 'disclaimer']);
Route::get('/ebook', [HomeController::class, 'ebooks']);

Route::get('/property/{id}', [HomeController::class, 'property']);

