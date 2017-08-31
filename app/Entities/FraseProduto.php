<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class FraseProduto extends Model
{
    protected $table = "fraseproduto";

    protected $fillable = [

        'titulo_oquefazemos',
        'frase_oquefazemos',
        'titulo_rotulos',
        'frase_rotulos',
        'titulo_suprimentos',
        'frase_suprimentos',
    ];
}
