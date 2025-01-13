<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ContactUSController;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard_admin');

// galeri route
Route::get('/galeri', [GaleriController::class, 'show'])->name('galeri');
Route::resource('/admin/galeri', GaleriController::class);

// proyek route
Route::get('/order', [ProyekController::class, 'show'])->name('order');
Route::resource('/admin/proyek', ProyekController::class);

// testimoni route
Route::get('/testimoni', [TestimoniController::class, 'show'])->name('testimoni');
Route::resource('/admin/testimoni', TestimoniController::class);

//contact_us route
Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');
Route::resource('/admin/contact_us', ContactUSController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
