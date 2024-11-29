<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'store'])->name('form.store');

Route::get('/', function () {
    return view('form'); // Nama file blade form Anda tanpa ekstensi ".blade.php"
});
