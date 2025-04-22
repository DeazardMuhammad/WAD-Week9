<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\AuthController;

Route::get('/komentar', [KomentarController::class, 'index'])->middleware('auth')->name('list.komen');;
Route::get('/registrasi', [AuthController::class, 'formregistrasi'])->name('registrasi.form');
Route::post('/registrasi/submit', [AuthController::class, 'submitregistrasi'])->name('registrasi.submit');
Route::get('/login', [AuthController::class, 'formlogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');