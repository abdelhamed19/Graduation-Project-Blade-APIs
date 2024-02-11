<?php

use App\Http\Controllers\Api\Activities\ActivityController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Home\HomeController;
use App\Http\Controllers\Api\Levels\LevelController;
use App\Http\Controllers\Api\Notes\NoteController;
use App\Http\Controllers\Api\Score\ScoreController;
use App\Http\Controllers\Api\Tasks\TaskController;
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

// Authentication routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/change-password', [AuthController::class, 'changePassword']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Home -- test -- profile routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/user', [HomeController::class, 'userData']);
    Route::post('/play-activities/{activity}', [ScoreController::class, 'scoreActivityResult']);
    Route::put('/testScore', [ScoreController::class, 'testScore']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/activities', [ActivityController::class, 'index']);
    Route::get('/activities/{activity}', [ActivityController::class, 'show']);
    Route::get('/getCompletedActivities', [ActivityController::class, 'getCompletedActivities']);
    Route::get('/getInCompletedActivities', [ActivityController::class, 'getInCompletedActivities']);
    Route::get('/getCompletedType/{type}', [ActivityController::class, 'getCompletedType']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/levels', [LevelController::class, 'index']);
    Route::get('/levels/{level}', [LevelController::class, 'show']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('notes', NoteController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('tasks', TaskController::class);
});
