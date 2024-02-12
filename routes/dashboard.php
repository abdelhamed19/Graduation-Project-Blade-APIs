<?php

use App\Http\Controllers\front\Dashboard\{ManageController, RolesController};
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth', 'role:super-admin']], function () {
    Route::get("dashboard", [ManageController::class, 'index'])->name('dashboard');
    Route::get("roles", [RolesController::class, 'roles'])->name('roles');
    Route::get("createRole", [RolesController::class, 'createRole'])->name('createRole');
    Route::post("storeRole", [RolesController::class, 'storeRole'])->name('storeRole');
    Route::get("assignRole", [RolesController::class, 'assignRolePage'])->name('assignRole');
    Route::post("assignRole", [RolesController::class, 'assignRole'])->name('assignRole');
    Route::delete("removeRole/{id}", [RolesController::class, 'removeRole'])->name('removeRole');
    Route::delete("deleteRole/{name}", [RolesController::class, 'deleteRole'])->name('deleteRole');
    Route::get("dashboard-levels", [ManageController::class, 'levels'])->name('dashboard-levels');
    Route::get("add-level", [ManageController::class, 'addNewLevel'])->name('add-level');
    Route::post("store-level", [ManageController::class, 'storeLevel'])->name('store-level');
    Route::delete("delete-level/{level}", [ManageController::class, 'deleteLevel'])->name('delete-level');
});

Route::group(['middleware' => ['auth', 'role:super-admin|admin']], function () {
    Route::get("roles", [RolesController::class, 'roles'])->name('roles');
    Route::get("createRole", [RolesController::class, 'createRole'])->name('createRole');
    Route::get("assignRole", [RolesController::class, 'assignRolePage'])->name('assignRole');
    Route::get("dashboard", [ManageController::class, 'index'])->name('dashboard');
    Route::get("dashboard-levels", [ManageController::class, 'levels'])->name('dashboard-levels');
    Route::get("add-level", [ManageController::class, 'addNewLevel'])->name('add-level');
    Route::get("dashboard-profile",[ManageController::class, 'profile'])->name('dashboard-profile');
    Route::delete('users/{user}', [RolesController::class, 'destroy'])->name('users.destroy');

});
