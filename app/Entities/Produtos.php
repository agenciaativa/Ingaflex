<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Produtos extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [

        'nome',
        'cat_id',
        'descricao',
        'file',
    ];

    public function produtos()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function files()
    {
        return $this->hasMany(ProdutosFile::class);
    }

}
