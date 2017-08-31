<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Categoria extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "categoria";

    protected $fillable = [

        'nome'
    ];

    public function categories()
    {
        return $this->hasMany(Produtos::class);
    }
}
