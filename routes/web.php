<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [FrontController::class,'index'])->name('halaman_utama');

Route::get('/berita', [FrontController::class,'berita'])->name('front_berita');

Route::get('/berita/{berita}', [FrontController::class, 'berita_detail'])->name('berita_detail');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin-dashboard')->middleware('auth');
Route::resource('/admin/berita', BeritaController::class);
