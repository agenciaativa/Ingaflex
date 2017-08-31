<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    protected $fillable = [
        'texto_empresa',
        'texto_missao',
        'texto_visao',
        'texto_valores'
    ];
}
