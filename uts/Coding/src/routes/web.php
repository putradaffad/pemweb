<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalHistoryController;

/* Livewire asset handling */
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/* END */

// Redirect root ke daftar pelanggan
Route::get('/', fn () => redirect()->route('customers.index'));

// CRUD pelanggan
Route::resource('customers', CustomerController::class);

// Route Riwayat Rental Umum
Route::get('/rental_history', [RentalHistoryController::class, 'index'])->name('rental_history.index');
