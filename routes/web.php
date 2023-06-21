<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

//FRONTEND
Route::get('/', \App\Http\Controllers\Frontend\LandingpageController::class);
Route::prefix('user')->group(function () {
    Route::get('/layanan', [\App\Http\Controllers\Frontend\LayananController::class, 'index'])->name('layanan');
    Route::get('/layanan/pengaduan', [\App\Http\Controllers\Frontend\PengaduanController::class, 'index'])->name('layanan.pengaduan');
    Route::post('/layanan/pengaduan/store', [\App\Http\Controllers\Frontend\PengaduanController::class, 'store'])->name('layanan.pengaduan.store');

    //survey
    Route::get('/survey', [\App\Http\Controllers\Frontend\SurveyController::class, 'index'])->name('survey.index');
    Route::post('/survey/store', [\App\Http\Controllers\Frontend\SurveyController::class, 'store'])->name('survey.store');

    //notifikasi
    Route::get('/notofikasi/sukses', \App\Http\Controllers\Frontend\NotifikasiController::class);
});

//BACKEND
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index']);
    Route::controller(\App\Http\Controllers\Admin\PerizinanController::class)->group(function () {
        Route::get('/perizinan', 'index')->name('perizinan.index');
        Route::post('/perizinan/store', 'store')->name('perizinan.store');
    });
});
