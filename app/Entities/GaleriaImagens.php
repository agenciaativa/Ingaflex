<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class GaleriaImagens extends Model
{
    protected $table = 'galeriaimagens';

    protected $fillable = [
        'nome',
        'file',
        'gal_id'
    ];

    public function galeria()
    {
        return $this->belongsTo(Galeria::class);
    }
}
