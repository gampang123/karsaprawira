<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Superadmin\MasterController;
use App\Http\Controllers\Superadmin\ProjekController;
use App\Http\Controllers\Konten\WelcomeController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [WelcomeController::class, 'welcome'])->name('beranda');


// Dashboard route with authentication middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes under authentication middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Content routes
Route::get('/projek', function () {
    return view('konten.projek');
})->name('projek'); 

Route::get('/tentangkami', function () {
    return view('konten.tentangkami');
})->name('tentangkami'); 

Route::get('/kontak', function () {
    return view('konten.kontak');
})->name('kontak'); 

// Superadmin routes
Route::get('/superadmin/master', [MasterController::class, 'master'])->name('superadmin.master');

// Projek management routes under Superadmin
Route::prefix('superadmin/projek')->name('superadmin.projek.')->group(function () {
    Route::get('/projek-list', [ProjekController::class, 'projek'])->name('projek-list');
    Route::get('/projek-create', [ProjekController::class, 'create'])->name('projek-create');
    Route::post('/projek-store', [ProjekController::class, 'store'])->name('projek-store');
    Route::get('/projek-edit/{id}', [ProjekController::class, 'edit'])->name('projek-edit');
    Route::patch('/projek-edit/{id}', [ProjekController::class, 'update'])->name('projek-edit');
    Route::put('/projek-update/{id}', [ProjekController::class, 'update'])->name('projek-update');
    Route::delete('/projek-delete/{id}', [ProjekController::class, 'destroy'])->name('projek-delete');
});

require __DIR__.'/auth.php';
