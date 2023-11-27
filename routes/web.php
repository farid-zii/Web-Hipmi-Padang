<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SektorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class,'index']);
Route::get('/kepengurusan', [FrontendController::class,'kepengurusan']);
Route::get('/tentang-kami', [FrontendController::class,'blog']);
Route::get('/anggota', [FrontendController::class,'blog']);
Route::get('/berita', [FrontendController::class,'blog']);
Route::get('/berita/{slug}', [FrontendController::class,'singleBlog']);
Route::get('/kegiatan', [FrontendController::class,'singleBlog']);
Route::get('/contact', [FrontendController::class,'contact']);

route::get('/login',[LoginController::class,'login']);
route::post('/login',[LoginController::class,'loginAction']);
route::get('/logout',[LoginController::class,'logout']);

// Dashboard
route::get('/dashboard',[DashboardController::class,'index']);
route::resource('/dashboard/jabatan',JabatanController::class);
route::resource('/dashboard/kategori',KategoriController::class);
route::resource('/dashboard/divisi',DivisiController::class);
route::resource('/dashboard/sektor',SektorController::class);
route::resource('/dashboard/profile',ProfileController::class);
route::resource('/dashboard/user',UserController::class);
route::resource('/dashboard/berita',BeritaController::class);
route::resource('/dashboard/kepengurusan',KepengurusanController::class);

Route::middleware('auth')->group(function () {

});
