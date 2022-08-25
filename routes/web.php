<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\data\MahasiswaController;
use App\Http\Controllers\data\TransaksiController;
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

//Route::resource('/buku', \App\Http\Controllers\BookController::class);
// Route::resource('mahasiswa','AnggotaController');
Route::get('buku', [BookController::class, 'index'])->name('buku.index');
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
// Route::post('admin/cooperation/store', [CooperationController::class, 'store'])->name('cooperation.store');
// Route::get('admin/cooperation/{id_industri}', [CooperationController::class, 'edit'])->name('cooperation.edit');
// Route::patch('admin/cooperation/{id_industri}', [CooperationController::class, 'update'])->name('cooperation.update');
// Route::delete('admin/cooperation/destroy/{id_industri}', [CooperationController::class, 'destroy'])->name('cooperation.destroy');
// Route::resource('transaksi','TransaksiController');

// Route::get('transaksi/edit/{id}', 'TransaksiController@edit');
// Route::get('transaksi/showBuku/{id}', 'TransaksiController@showBuku');
// Route::get('transaksi/getMahasiswa/{id}', 'TransaksiController@getMahasiswa');
// Route::post('/transaksi/update/{id}', 'TransaksiController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
