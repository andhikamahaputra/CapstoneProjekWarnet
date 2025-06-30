<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('welcome');
});

// route kasir
Route::middleware(['auth', 'role:kasir,admin'])->prefix('kasir')->group(function () {
    Route::get('/', [KasirController::class, 'index'])->name('kasir.index');
    Route::post('/checkout', [KasirController::class, 'checkout'])->name('kasir.checkout');
    Route::get('/pesanan', [KasirController::class, 'pesanan'])->name('kasir.pesanan');
    Route::get('/pesanan/{id}/confirm', [KasirController::class, 'confirmPesanan'])->name('kasir.pesanan.confirm');
    Route::get('/transaksi', [KasirController::class, 'transaksi'])->name('kasir.transaksi');
    Route::resource('produk', ProdukController::class);
});




