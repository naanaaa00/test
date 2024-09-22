<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(BarangController::class)->group(function () {
    Route::get('/', 'index')->name('barang.index'); // Menampilkan semua barang
    Route::get('/create', 'create')->name('barang.create'); // Form untuk create barang
    Route::post('/create', 'store')->name('barang.store'); // Proses simpan barang
    Route::get('/edit/{id}', 'edit')->name('barang.edit'); // Form untuk edit barang
    Route::post('/update/{id}', 'update')->name('barang.update'); // Proses update barang
    Route::delete('/destroy/{id}', 'destroy')->name('barang.destroy'); // Hapus barang
});
