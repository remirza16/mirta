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

Route::get('siswa', function () {
    $arrSiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo","Lisa Permata"];
    return view('siswa')->with('siswa',$arrSiswa);
});

Route::get('guru', function () {
    $arrGuru = ["Maya Fitrianti, M.M","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustisnus","Dr. Syahrial, M.Kom."];
    return view('guru')->with('guru',$arrGuru);
});

Route::get('gallery', function () {
    return view('gallery');
});