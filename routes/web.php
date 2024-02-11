<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\AuthController;

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

Route::get("/", function () {
    return view('front.home');
})->name('home');

Route::middleware("guest")->group(function(){
    Route::get('/login', [AuthController::class,"loginPage"])->name('loginPage');
    Route::get('/register', [AuthController::class,"registerPage"])->name('registerPage');
});

Route::post('/register', [AuthController::class,"register"])->name('register');
Route::post('/login', [AuthController::class,"login"])->name('login');


Route::middleware("auth")->group(function(){
    Route::get("/profile",[AuthController::class,"profile"])->name("profile");
    Route::get("/change-password",[AuthController::class,"changePasswordPage"])->name("changePasswordPage");
    Route::put("/change-password",[AuthController::class,"changePassword"])->name("changePassword");
    Route::post('/logout', [AuthController::class,"logout"])->name('logout');
});
