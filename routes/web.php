<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\data\MahasiswaController;
use App\Http\Controllers\data\TransaksiController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
Route::resource('buku', BookController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('transaksi', TransaksiController::class);
});
// Route::resource('mahasiswa','AnggotaController');
//Route::get('buku', [BookController::class, 'index'])->name('buku.index');
// Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
// Route::post('buku/create', [BookController::class, 'create'])->name('buku.create');
// Route::post('buku/store', [BookController::class, 'store'])->name('buku.store');
// Route::resource('transaksi','TransaksiController');

// Route::get('transaksi/edit/{id}', 'TransaksiController@edit');
// Route::get('transaksi/showBuku/{id}', 'TransaksiController@showBuku');
// Route::get('transaksi/getMahasiswa/{id}', 'TransaksiController@getMahasiswa');
// Route::post('/transaksi/update/{id}', 'TransaksiController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
