<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return view('tampilan.isi');
})->name('beranda');


// KONTEN
Route::get('/projek', function () {
    return view('konten.projek');
})->name('projek'); 

Route::get('/tentangkami', function () {
    return view('konten.tentangkami');
})->name('tentangkami'); 

Route::get('/kontak', function () {
    return view('konten.kontak');
})->name('kontak'); 


require __DIR__.'/auth.php';
