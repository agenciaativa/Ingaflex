<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Parceiros extends Model
{
    protected $fillable = [
        'nome',
        'url',
        'logo',
        'status'
    ];
}
