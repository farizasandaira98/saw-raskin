<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;
use App\Models\Kriteria;

class FilteredSelectFormField extends AbstractHandler
{
    protected $codename = 'filtered_select';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        $kriteria = Kriteria::all();
        return view('voyager::formfields.filtered_select', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent,
            'kriteria' => $kriteria,
        ]);
    }
}

