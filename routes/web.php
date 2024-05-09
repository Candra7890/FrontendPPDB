<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanjarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MProvinsiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HomepageController;

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

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('provinsi', \App\Http\Controllers\MProvinsiController::class)->middleware('auth');
Route::resource('kabupaten', \App\Http\Controllers\MKabupatenController::class)->middleware('auth');
Route::resource('kecamatan', \App\Http\Controllers\MKecamatanController::class)->middleware('auth');
Route::resource('desa', \App\Http\Controllers\MDesaController::class)->middleware('auth');
Route::resource('banjar', \App\Http\Controllers\MBanjarController::class)->middleware('auth');

//auth user
Route::get('login_siswa', [SiswaController::class, 'login_siswa']);
Route::get('register_siswa', [SiswaController::class, 'register_siswa']);

//homepage
Route::get('/index', [HomepageController::class, 'index']);
Route::get('/pengertian', [HomepageController::class, 'pengertian']);
Route::get('/berita', [HomepageController::class, 'berita']);
Route::get('/pengaduan', [HomepageController::class, 'pengaduan']);
Route::get('/dayatampung', [HomepageController::class, 'dayatampung']);
Route::get('/dokumen', [HomepageController::class, 'dokumen']);
Route::get('/periode', [HomepageController::class, 'periode']);
Route::get('/jalursmp', [HomepageController::class, 'jalursmp']);
Route::get('/jalursd', [HomepageController::class, 'jalursd']);
Route::get('/pendaftaranzonasismp', [HomepageController::class, 'pendaftaranzonasismp']);
Route::get('/pendaftaranafirmasismp', [HomepageController::class, 'pendaftaranafirmasismp']);
Route::get('/pendaftaranperpindahansmp', [HomepageController::class, 'pendaftaranperpindahansmp']);
Route::get('/pendaftaranraporprestasismp', [HomepageController::class, 'pendaftaranraporprestasismp']);
require __DIR__.'/auth.php';
