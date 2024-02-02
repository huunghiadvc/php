<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['CheckAdminPermission'])->group(function () {
    Route::resource('dashboard', AdminController::class);

    Route::get('dashboard/{id}', [AdminController::class, 'show'])->name('dashboard.product');

    Route::post('/dashboard/update', [AdminController::class, 'update'])->name('dashboard.update');

    Route::delete('/dashboard/{id}', [AdminController::class, 'destroy'])->name('dashboard.destroy');
});

