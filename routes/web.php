<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Superadmin\MasterController;
use App\Http\Controllers\Superadmin\ProjekController;
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

// SUPERADMIN
Route::get('/superadmin/master', [MasterController::class, 'master'])->name('superadmin.master');


// Route untuk Projek
Route::get('/superadmin/projek/projek-list', [ProjekController::class, 'projek'])->name('superadmin.projek.projek-list');
Route::get('/superadmin/projek/projek-create', [ProjekController::class, 'create'])->name('superadmin.projek.projek-create');
Route::post('/superadmin/projek/projek-store', [ProjekController::class, 'store'])->name('superadmin.projek.projek-store');
Route::get('/superadmin/projek/projek-edit/{id}', [ProjekController::class, 'edit'])->name('superadmin.projek.projek-edit');
Route::patch('superadmin/projek/projek-edit/{id}', [ProjekController::class, 'update'])->name('superadmin.projek.projek-edit');
Route::put('/superadmin/projek/projek-update/{id}', [ProjekController::class, 'update'])->name('superadmin.projek.projek-update');
Route::delete('/superadmin/projek/projek-delete/{id}', [ProjekController::class, 'destroy'])->name('superadmin.projek.projek-delete');


require __DIR__.'/auth.php';
