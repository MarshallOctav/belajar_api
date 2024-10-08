<?php

use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\AktorController;
use App\Http\Controllers\Api\AuthController;
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

// Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('kategori', [KategoriController::class, 'index']);
    Route::post('kategori', [KategoriController::class, 'store']);
    Route::get('kategori/{id}', [KategoriController::class, 'show']);
    Route::put('kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

    Route::get('genre', [GenreController::class, 'index']);
    Route::post('genre', [GenreController::class, 'store']);
    Route::get('genre/{id}', [GenreController::class, 'show']);
    Route::put('genre/{id}', [GenreController::class, 'update']);
    Route::delete('genre/{id}', [GenreController::class, 'destroy']);

    Route::get('aktor', [AktorController::class, 'index']);
    Route::post('aktor', [AktorController::class, 'store']);
    Route::get('aktor/{id}', [AktorController::class, 'show']);
    Route::put('aktor/{id}', [AktorController::class, 'update']);
    Route::delete('aktor/{id}', [AktorController::class, 'destroy']);

// });

// auth route
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
