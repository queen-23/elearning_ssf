<?php

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

Route::get('/', function () {
    $kontak = file_get_contents(base_path('public/data/kontak.json'));
    $kontak = json_decode($kontak, true);
    return view('beranda.index', compact('kontak'));
});
Route::get('/about-us', function () {
    return view('beranda.profile');
});
Route::get('/courses-offered', function () {
    return view('beranda.courses');
});
Route::get('/gallery', function () {
    return view('beranda.gallery');
});
Route::get('/facilities', function () {
    return view('beranda.facilities');
});
Route::get('/contact-us', function () {
    return view('beranda.contact');
});
