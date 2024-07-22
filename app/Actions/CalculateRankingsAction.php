<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class CalculateRankingsAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Hitung';
    }

    public function getIcon()
    {
        return 'voyager-bar-chart';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-success',
        ];
    }

    public function getDefaultRoute()
    {
        return route('calculate.rankings');
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'penduduk';
    }
}
