<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Configuracoes extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'logo',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'cep',
    ];
}
