<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use App\Exports\ReportExportTable;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller
{
    public function index()
    {
        return view('penduduk', [
            'penduduks' => Penduduk::all()
        ]);
    }
    
    public function download()
    {
        return Excel::download(new ReportExportTable, 'hasil-perhitungan.xlsx');
    }
}
