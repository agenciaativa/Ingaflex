<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamento';

    protected $fillable = [
        'tipoServico',
        'formato',
        'subtrato',
        'quantidade',
        'cores',
        'laminacao',
        'acabamento',
        'largura',
        'comprimento',
        'empresa',
        'nome',
        'email',
        'telefone',
        'cidade',
        'uf',
        'mensagem',
        'anexo',
    ];
}
