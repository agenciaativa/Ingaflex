<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class LinhaDestaque extends Model
{
    protected $table = 'linhadestaque';

    protected $fillable = [
        'nome',
        'file',
        'status'
    ];
}
