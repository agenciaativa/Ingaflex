<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Logistica extends Model
{
    protected $table = 'logistica';
    protected $fillable = [
        'titulo',
        'texto_logistica'
    ];
}
