<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    use HasFactory;

    public function penduduks()
    {
        return $this->hasMany(PendudukSubKriteria::class);
    }

    
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id');
    }

    public function pendudukSubKriterias()
    {
        return $this->hasMany(PendudukSubKriteria::class, 'sub_kriteria_id');
    }
    
}
