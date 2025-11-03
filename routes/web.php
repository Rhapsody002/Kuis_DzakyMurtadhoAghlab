<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Router Dashboard mahasiswa
Route::get('mahasiswa', [MahasiswaController::class,'index'])-> name('main');

