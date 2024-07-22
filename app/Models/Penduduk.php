<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kriteria_id'];

    protected $table = 'penduduks';

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function subKriterias()
{
    return $this->hasMany(PendudukSubKriteria::class);
}


}
