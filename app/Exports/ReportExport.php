<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penduduk::all();
    }

    public function headings(): array
    {
        return [
            'nama',
            'weighted_sum',
            'rank',
            'created_at',
        ];
    }
}
