<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ----------------------
// home routes
// ----------------------
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('admin/login', [homeController::class, 'login'])->name('login');
Route::get('about', [homeController::class, 'about'])->name('about');
Route::get('contact', [homeController::class, 'contact'])->name('contact');

// ----------------------
// admin routes
// ----------------------
Route::get('admin/dashboard', [homeController::class, 'admin']);