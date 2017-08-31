<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class FraseHome extends Model
{
    protected $table = "frasehome";

    protected $fillable = [

        'titulo',
        'conteudo'
    ];
}
