<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/authenticate', [ApiController::class, 'authenticate'])->name('api.authenticate');
Route::get('/branches', [ApiController::class, 'branches'])->name('api.branches');
Route::get('/branch', [ApiController::class, 'branch'])->name('api.branch');
Route::get('/properties', [ApiController::class, 'properties'])->name('api.properties');
Route::get('/property', [ApiController::class, 'property'])->name('api.property');
Route::get('/update-data', [ApiController::class, 'updateProperties'])->name('api.update_data');
Route::get('/update-files', [ApiController::class, 'updatedFiles'])->name('api.updated_files');
