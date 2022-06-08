<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

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
Route::resource('mahasiswa', MahasiswaController::class);
Route::post('search', [MahasiswaController::class, 'searchMhs'])->name('mahasiswa.search');

Route::prefix('mahasiswa')->group(function () {
    Route::get('nilai/{nim}', [MahasiswaController::class, 'showKhs'])->name('mahasiswa.khs');
});

Route::get('mahasiswa/nilai/{id_mahasiswa}',[MahasiswaController::class, 'showKhs'])
    ->name('mahasiswa.nilai');

Route::get('/mahasiswa/cetak_khs/{id_mahasiswa}', [MahasiswaController::class, 'cetak_khs'])
->name('mahasiswa.cetak_khs');

// Route::get('/', function () {
//     return view('welcome');
// });
