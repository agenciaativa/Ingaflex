<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nome',
        'url',
        'file'
    ];
}
