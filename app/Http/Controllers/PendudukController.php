<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        return view('penduduk', [
            'penduduks' => Penduduk::all()
        ]);
    }
}
