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
});
