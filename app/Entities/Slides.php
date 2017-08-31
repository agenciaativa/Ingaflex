<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    protected $fillable = [
        'file',
        'titulo',
        'status'
    ];
}
