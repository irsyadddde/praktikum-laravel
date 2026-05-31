<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [mahasiswacontroller::class, 'index']);
Route::get('/mahasiswa/create', [mahasiswacontroller::class, 'create']);
Route::post('/mahasiswa/store', [mahasiswacontroller::class, 'store']);
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);
Route::resource('anggota', AnggotaController::class);