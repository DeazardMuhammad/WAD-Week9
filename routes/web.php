<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomentarController;

Route::get('/komentar', [KomentarController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
