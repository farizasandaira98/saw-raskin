<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendudukSubKriteria;
use App\Models\SubKriteria;

class CustomPendudukSubKriteriaController extends Controller
{
    public function index(Request $request)
    {
        $kriteriaId = $request->input('kriteria_id');
        $subKriterias = SubKriteria::where('kriteria_id', $kriteriaId)->get();

        return view('your-view', compact('subKriterias', 'kriteriaId'));
    }
}

