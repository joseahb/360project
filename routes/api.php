<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
<<<<<<< HEAD

Route::get('api/authenticate', [ApiController::class,'authenticate'])->name('api.authenticate');
=======
Route::get('/authenticate', [ApiController::class, 'authenticate'])->name('api.authenticate');
Route::get('/branches', [ApiController::class, 'branches'])->name('api.branches');
>>>>>>> 3541cb1d431e158b47c90c203ceaaed4ba5e9444
