<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\BerandaController;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegistrasiController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\KategoriController;


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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/post/{post:slug}', [BerandaController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth'); 

Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth'); 
Route::post('/kategori', [KategoriController::class, 'store']); 
Route::put('/kategori', [KategoriController::class, 'update']); 
Route::delete('/kategori', [KategoriController::class, 'destroy']);

Route::get('/posting', [PostController::class, 'index'])->middleware('auth'); 
Route::get('/posting/pratinjau/{post:slug}', [PostController::class, 'show'])->middleware('auth');
Route::get('/posting/tambah', [PostController::class, 'create']);
Route::post('/posting', [PostController::class, 'store']);
Route::get('/posting/{post:id}/edit', [PostController::class, 'edit']);
Route::put('/posting/{post:id}', [PostController::class, 'update']);
Route::delete('/posting', [PostController::class, 'destroy']);

Route::get('/stolink', function () {
    return Artisan::call('storage:link');
});