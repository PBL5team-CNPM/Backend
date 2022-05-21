<?php

use App\Http\Controllers\PhimController;
use App\Http\Controllers\TheLoaiController;
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


Route::get('/phims', [PhimController::class, 'index']);
Route::get('/theloais', [TheLoaiController::class, 'index']);
Route::post('/addphims', [PhimController::class, 'store']);
Route::put('/updatephim/{id}', [PhimController::class, 'update']);
Route::post('/deletephim/{id}', [PhimController::class, 'destroy']);