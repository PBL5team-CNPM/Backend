<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PhimController;
use App\Http\Controllers\TheLoaiController;
use App\Http\Controllers\UserController;
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


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/phims', [PhimController::class, 'index']);
Route::get('/theloais', [TheLoaiController::class, 'index']);
Route::get('/permissions', [PermissionController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);

Route::post('/addphims', [PhimController::class, 'store']);
Route::post('/updatephim/{id}', [PhimController::class, 'update']);
Route::post('/deletephim/{id}', [PhimController::class, 'destroy']);

Route::post('/addtheloais', [TheLoaiController::class, 'store']);
Route::put('/updatetheloai/{id}', [TheLoaiController::class, 'update']);
Route::post('/deletetheloai/{id}', [TheLoaiController::class, 'destroy']);
Route::get('/findtheloai/{id}', [TheLoaiController::class, 'find']);

Route::post('/addpermission', [PermissionController::class, 'store']);
Route::put('/updatepermission/{id}', [PermissionController::class, 'update']);
Route::post('/deletepermission/{id}', [PermissionController::class, 'destroy']);

Route::get('/actions', [ActionController::class, 'index']);

Route::put('/grantpermissiontouser/{id}', [UserController::class, 'grantPermission']);
Route::put('/updateprofile/{id}', [UserController::class, 'update']);
Route::post('/uploadavatar/{id}', [UserController::class, 'uploadAvatar']);




