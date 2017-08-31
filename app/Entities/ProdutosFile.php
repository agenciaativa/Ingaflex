<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProdutosFile extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "produtos_files";

    protected $fillable = [

        'name',
        'extension'
    ];

    public function produtos()
    {
        return $this->BelongsTo(Produtos::class);
    }

    /**
     * Get the default foreign key name for the model.
     *
     * @return string
     */
    public function getForeignKey()
    {
        return Pluralizer::singular($this->table).'_id';
    }
}
