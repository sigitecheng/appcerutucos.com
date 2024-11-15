<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman.frontend.halamanutama.index', [
        'title' => 'Coeroetoe Oerang Soenda'
    ]);
});

Route::get('/aboutus', function () {
    return view('halaman.frontend.aboutus.index', [
        'title' => 'About COS'
    ]);
});

Route::get('/company', function () {
    return view('halaman.frontend.company.index', [
        'title' => 'Company COS'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
