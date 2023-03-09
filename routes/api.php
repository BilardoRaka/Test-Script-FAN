<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EpresenceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/epresence', [EpresenceController::class, 'index']);
    Route::post('/epresence', [EpresenceController::class, 'store']);
    Route::put('/epresence/{epresence}/approve', [EpresenceController::class, 'approve']);
});

Route::post('/login', [AuthController::class, 'login']);
