<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'departamento',
        'empresa'
    ];
}
