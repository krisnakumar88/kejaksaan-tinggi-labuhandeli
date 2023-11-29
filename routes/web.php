<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LoginController;
use App\Models\Halaman;
use App\Http\Controllers\PejabatstrukturalController;
use App\Http\Controllers\DaftarpencarianController;
use App\Http\Controllers\SambutanketuaController;
use App\Http\Controllers\HubungiController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\SubhalamanController;
use App\Models\KategoriBerita;

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

Route::get('/kategori-berita/{kategoriberita}', [FrontController::class, 'kategori_berita'])->name('kategori-berita');

Route::get('/halaman/{subhalaman}', [FrontController::class, 'subhalaman'])->name('subhalaman');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin-dashboard')->middleware('auth');

Route::resource('/admin/berita', BeritaController::class);

Route::post('/upload/fotoBerita', [BeritaController::class, 'upload_foto'])->name('upload_foto_berita');

Route::resource('/admin/halaman', HalamanController::class);

Route::resource('/admin/subhalaman', SubhalamanController::class);

Route::post('/upload/fotoSubhalaman', [SubhalamanController::class, 'upload_foto'])->name('upload_foto_subhalaman');

Route::resource('/admin/pejabatstruktural', PejabatstrukturalController::class);

Route::resource('/admin/daftarpencarian', DaftarpencarianController::class);

Route::get('/dpo', [FrontController::class,'dpo'])->name('dpo');

Route::resource('/admin/sambutanketua', SambutanketuaController::class);
Route::get('/sambutan-ketua', [FrontController::class,'sambutan'])->name('sambutan');

Route::get('/hubungi', [FrontController::class,'hubungi'])->name('hubungi');
Route::post('/hubungi', [FrontController::class,'pesan'])->name('pesan');

Route::resource('/admin/hubungi', HubungiController::class);

Route::resource('/admin/kategori-berita', KategoriBeritaController::class);
