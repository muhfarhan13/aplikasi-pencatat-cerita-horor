<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [CeritaController::class, 'index'])->name('home');
Route::get('/buatcerita', [CeritaController::class, 'create'])->name('buat-cerita');
Route::POST('/simpancerita', [CeritaController::class, 'store'])->name('simpan-cerita');
Route::get('/bacacerita/{id}', [CeritaController::class, 'show'])->name('baca-cerita');
Route::get('/linkkhusus', [CeritaController::class, 'link'])->name('link-khusus');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/datacerita', [AdminController::class, 'index'])->name('data-cerita');
Route::get('/datacerita/{id}/edit', [AdminController::class, 'edit'])->name('edit-cerita');
Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');
Route::put('/datacerita/{id}', [AdminController::class, 'update'])->name('update-cerita');
Route::get('/statuscerita/{id}', [AdminController::class, 'status'])->name('status-cerita');
Route::delete('/datacerita/{id}', [AdminController::class, 'destroy'])->name('');

