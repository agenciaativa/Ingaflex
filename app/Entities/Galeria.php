<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = 'galeria';

    protected $fillable = [
        'nome',
    ];


    public function galeriaImagens()
    {
        return $this->hasMany(GaleriaImagens::class);
    }
}
