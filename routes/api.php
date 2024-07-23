<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Models\SubKriteria;

Route::get('/sub_kriterias', function(Request $request) {
    $kriteriaId = $request->query('kriteria_id');
    return SubKriteria::where('kriteria_id', $kriteriaId)->get();
});

