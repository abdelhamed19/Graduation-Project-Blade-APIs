<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\Home\{AuthController, CoreController, HomeController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/dashboard.php';

Route::get("/", [HomeController::class,"index"])->name('home');

Route::middleware("guest")->group(function(){
    Route::get('/login', [AuthController::class,"loginPage"])->name('loginPage');
    Route::get('/register', [AuthController::class,"registerPage"])->name('registerPage');
});

Route::post('/register', [AuthController::class,"register"])->name('register');
Route::post('/login', [AuthController::class,"login"])->name('login');

Route::get("/exercise",[HomeController::class,"exercise"])->name("exercise");


Route::middleware("auth")->group(function(){
    Route::get("/profile",[AuthController::class,"profile"])->name("profile");
    Route::get("/change-password",[AuthController::class,"changePasswordPage"])->name("changePasswordPage");
    Route::put("/change-password",[AuthController::class,"changePassword"])->name("changePassword");
    Route::post('/logout', [AuthController::class,"logout"])->name('logout');
});

Route::middleware("auth")->group(function(){
    Route::get("/levels",[CoreController::class,"levels"])->name("levels");
    Route::get("/level/{name}",[CoreController::class,"levelActivities"])->name("levelActivities");
    Route::get("/list",[CoreController::class,"listView"])->name("list-view");
    Route::post("/list",[CoreController::class,"storeList"])->name("storeList");
});
