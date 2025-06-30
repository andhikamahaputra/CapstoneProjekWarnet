<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ProdukController;


Route::get('/', [PesanController::class, 'index'])->name('pesan.index');
Route::post('/pesan/store', [PesanController::class, 'store'])->name('pesan.store');

require __DIR__.'/auth.php';

Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // route kasir
    Route::get('/', [KasirController::class, 'index'])->name('kasir.index');
    Route::post('/checkout', [KasirController::class, 'checkout'])->name('kasir.checkout');
    Route::get('/pesanan', [KasirController::class, 'pesanan'])->name('kasir.pesanan');
    Route::get('/pesanan/{id}/confirm', [KasirController::class, 'confirmPesanan'])->name('kasir.pesanan.confirm');
    Route::get('/transaksi', [KasirController::class, 'transaksi'])->name('kasir.transaksi');
    Route::resource('produk', ProdukController::class);
});




