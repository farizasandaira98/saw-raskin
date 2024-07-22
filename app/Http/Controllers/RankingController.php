<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\SubKriteria;
use App\Models\PendudukSubKriteria;
use DB;

class RankingController extends Controller
{
    public function calculateRankings()
{
    // Step 1: Menghitung jumlah berbobot (Calculate weighted sums)
    $penduduks = Penduduk::all();
    $subKriterias = SubKriteria::all();

    foreach ($penduduks as $penduduk) {
        $jumlahBerbobot = 0; // weighted sum
        $pendudukSubKriterias = PendudukSubKriteria::where('penduduk_id', $penduduk->id)->get();

        foreach ($pendudukSubKriterias as $pendudukSubKriteria) {
            $subKriteria = $pendudukSubKriteria->subKriteria;
            if ($subKriteria) {
                $jumlahBerbobot += $subKriteria->bobot;
            }
        }

        $penduduk->weighted_sum = $jumlahBerbobot;
        $penduduk->save();
    }

    // Step 2: Menentukan peringkat (Assign ranks)
    $penduduks = Penduduk::orderBy('weighted_sum', 'desc')->get();
    $rank = 1;
    foreach ($penduduks as $penduduk) {
        $penduduk->rank = $rank++;
        $penduduk->save();
    }

    return redirect()->back()->with('message', 'Perhitungan peringkat berhasil dilakukan');
}


}

