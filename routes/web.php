<?php

use App\Http\Controllers\EkstrakurikulerController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name('home');

Route::get('/daftar-ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekskul.daftar');
Route::post('/daftar-ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('ekskul.daftar.store');
