<?php

use App\Http\Controllers\TrialFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name('home');