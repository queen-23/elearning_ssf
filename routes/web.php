<?php

use App\Http\Controllers\AuthController;
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

include 'berandaRoutes.php';

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/tes', [AuthController::class, 'tes']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::get('/setting-profile', [AuthController::class, 'editProfile'])->middleware('auth');
Route::post('/setting-profile', [AuthController::class, 'updateProfile'])->middleware('auth');
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'role:admin'], function () {
    Route::get('/akun', [\App\Http\Controllers\Admin\AkunController::class, 'index']);
    Route::post('/akun', [\App\Http\Controllers\Admin\AkunController::class, 'store']);
    Route::post('/akun/{id}', [\App\Http\Controllers\Admin\AkunController::class, 'update']);
    Route::delete('/akun/{id}', [\App\Http\Controllers\Admin\AkunController::class, 'destroy']);

    Route::get('/kelas', [\App\Http\Controllers\Admin\KelasController::class, 'index']);
    Route::get('/kelas/create', [\App\Http\Controllers\Admin\KelasController::class, 'create']);
    Route::get('/kelas/{id}', [\App\Http\Controllers\Admin\KelasController::class, 'show']);
    Route::post('/kelas', [\App\Http\Controllers\Admin\KelasController::class, 'store']);
    Route::put('/kelas/{id}', [\App\Http\Controllers\Admin\KelasController::class, 'update']);
    Route::get('/kelas/{id}/edit', [\App\Http\Controllers\Admin\KelasController::class, 'edit']);
    Route::delete('/kelas/{id}', [\App\Http\Controllers\Admin\KelasController::class, 'destroy']);

    Route::get('/beranda/kontak', [\App\Http\Controllers\Admin\BerandaController::class, 'kontak']);
    Route::post('/beranda/kontak', [\App\Http\Controllers\Admin\BerandaController::class, 'updateKontak']);
    Route::get('/beranda/gallery', [\App\Http\Controllers\Admin\BerandaController::class, 'gallery']);
    Route::post('/beranda/gallery', [\App\Http\Controllers\Admin\BerandaController::class, 'storeGallery']);
    Route::delete('/beranda/gallery/{id}', [\App\Http\Controllers\Admin\BerandaController::class, 'destroyGallery']);
    Route::put('/beranda/gallery/{id}', [\App\Http\Controllers\Admin\BerandaController::class, 'updateGallery']);
});

Route::group(['prefix' => 'siswa', 'middleware' => 'auth', 'role:siswa'], function () {
    Route::resource('kelas', \App\Http\Controllers\Siswa\KelasController::class);
});
Route::group(['prefix' => 'tutor', 'middleware' => 'auth', 'role:tutor'], function () {
    Route::resource('kelas', \App\Http\Controllers\Tutor\KelasController::class);
    Route::resource('materi', \App\Http\Controllers\Tutor\MateriController::class);
    Route::get('kuis/{id}', [\App\Http\Controllers\Tutor\KuisController::class, 'index']);
    Route::get('soal/create', [\App\Http\Controllers\Tutor\KuisController::class, 'create']);
});

//log-viewers
Route::get('log-viewers', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
Route::get('log-viewers/logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'logs']);
