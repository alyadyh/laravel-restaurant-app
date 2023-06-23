<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\displayController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\menuController;

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

Route::get('/', [displayController::class, "index"]);

Route::resource('/dashboard', dashboardController::class);
Route::resource('/categories', categoryController::class);
Route::resource('/menus', menuController::class);
Route::resource('/tables', tableController::class);
Route::resource('/reservations', reservationController::class);