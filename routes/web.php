<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Superadmin\MasterController;
use App\Http\Controllers\Superadmin\ProjekController;
use App\Http\Controllers\Superadmin\DetailController;
use App\Http\Controllers\Superadmin\DetailProjekController;
use App\Http\Controllers\Konten\WelcomeController;
use App\Http\Controllers\Konten\ProjekKontenController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [WelcomeController::class, 'welcome'])->name('konten.isi');


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

Route::get('/projek', [ProjekKontenController::class, 'projek'])->name('konten.projek');
Route::get('/projek/{id_projek}', [ProjekKontenController::class, 'show'])->name('konten.projek.detail');


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


Route::prefix('superadmin/detail')->name('superadmin.detail.')->group(function () {
    Route::get('/detail-list', [DetailController::class, 'detail'])->name('detail-list');
    Route::get('/detail-create', [DetailController::class, 'create'])->name('detail-create');
    Route::post('/detail-store', [DetailController::class, 'store'])->name('detail-store');
    Route::get('/detail-edit/{id_detail}', [DetailController::class, 'edit'])->name('detail-edit');
    Route::patch('/detail-update/{id_detail}', [DetailController::class, 'update'])->name('detail-update');
    Route::delete('/detail-destroy/{id_detail}', [DetailController::class, 'destroy'])->name('detail-destroy');
});


Route::get('superadmin/detail-projek/{id_projek}', [DetailProjekController::class, 'detailprojek'])
    ->name('superadmin.detail-projek.detail-projek');

require __DIR__.'/auth.php';
