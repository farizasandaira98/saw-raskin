<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\RankingController;

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
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/calculate-rankings', [RankingController::class, 'calculateRankings'])->name('calculate.rankings');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/penduduk', [App\Http\Controllers\PendudukController::class, 'index'])->name('penduduk');
    Route::get('/penilaian', [App\Http\Controllers\RankingController::class, 'index'])->name('penilaian');
    Route::get('/sub-kriteria', [App\Http\Controllers\SubKriteriaController::class, 'index'])->name('sub-kriteria');
});
