<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use Illuminate\Http\Request;
use App\Models\PendudukSubKriteria;

class PendudukSubKriteriaController extends VoyagerBaseController
{
    public function store(Request $request)
    {
        // Validasi dan tangkap data dari request
        $validatedData = $request->validate([
            'penduduk_id' => 'required|integer',
            'kriteria_id' => 'required|integer',
            'sub_kriteria_id' => 'required|integer',
        ]);

        // Simpan data ke database
        PendudukSubKriteria::create($validatedData);

        // Redirect atau response lainnya
        return redirect()->route('voyager.penduduk-sub-kriterias.index')->with([
            'message' => 'Data berhasil disimpan',
            'alert-type' => 'success',
        ]);
    }
}
