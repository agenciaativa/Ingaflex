<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class RedeSociais extends Model
{

    protected $table = "redesociais";
    protected $fillable = [
        'file',
        'titulo',
        'url',
        'status'
    ];
}
