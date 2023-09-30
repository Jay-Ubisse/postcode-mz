<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
Route::controller(AuthController::class)->group(function() {
    Route::get('/admin/login', 'index')->name('admin.login');
    Route::post('/admin', 'login')->name('admin');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('admin/home', 'index')->name('admin.home');
});