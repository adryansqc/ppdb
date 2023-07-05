<?php

use App\Http\Controllers\BerandaOperatorController;
use App\Http\Controllers\BerandaSiswaController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\HasilPengumumanSiswaController;
use App\Http\Controllers\JumlahPesertaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PendaftaranSiswaController;
use App\Http\Controllers\UserController;
use App\Models\JumlahPesertaDaftar;
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
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/jalurpendaftaran', function () {
    return view('jalurpendaftaran');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function () {
    //ini route khusus untuk operator
    Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');
    Route::resource('user', UserController::class);
    Route::resource('pendaftaransiswa', PendaftaranSiswaController::class);
    Route::get('/verifikasi/{id}', 'PendaftaranSiswaController@verifikasi')->name('verifikasi');
    Route::get('/verifikasi/{id}/tidak-sah', 'PendaftaranSiswaController@tidakSah')->name('tidakSah');
    Route::resource('pengumumansiswa', HasilController::class);
    Route::resource('jumlahpeserta', JumlahPesertaController::class);
});

Route::prefix('siswa')->middleware(['auth', 'auth.siswa'])->group(function () {
    //ini route khusus untuk calon siswa baru
    Route::get('beranda', [BerandaSiswaController::class, 'index'])->name('siswa.beranda');
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('hasilpengumumansiswa', HasilPengumumanSiswaController::class);
});

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    //ini route khusus untuk admin
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('/login');
});
