<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    protected $table = 'manutencao';

    protected $fillable = [
        'status',
    ];
}
