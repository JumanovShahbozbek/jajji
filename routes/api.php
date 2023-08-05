<?php

use App\Http\Controllers\Api\InfoController;
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

Route::apiResource('infos', InfoController::class);

/* Route::get('infos/index', [InfoController::class, 'index']);
Route::get('infos/show/{id}', [InfoController::class, 'show']);
Route::post('infos/store', [InfoController::class, 'store']); */
