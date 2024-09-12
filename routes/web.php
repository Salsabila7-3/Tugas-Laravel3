<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('welcome');
});
Route::get('helo', function () {
    return 'Ini Laravel Saya';
});
Route::get('hello/{namalengkap}', function ($namalengkap) {
    return 'Halo nama saya : '. $namalengkap;
});


Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil penjumlahan adalah : '. $nilai1 + $nilai2;
});

Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil penjumlahan adalah : '. $nilai1 + $nilai2;
});


Route::get('praktik', function () {
    return view('praktik');
});

Route::get('template', function () {
    return view('template');
});


Route::get('template', function () {
    return view('template');
});


Route::get('login', function () {
    return view('login');
});


Route::get('register', function () {
    return view('template.register');
});


Route::resource('siswa', SiswaController::class);

Route::resource('news', NewsController::class);
    