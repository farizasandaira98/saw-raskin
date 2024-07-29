<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubKriteria;

class SubKriteriaController extends Controller
{
    public function index()
    {
        return view('subkriteria', [
            'subkriteria' => SubKriteria::all()
        ]);
    }
}
