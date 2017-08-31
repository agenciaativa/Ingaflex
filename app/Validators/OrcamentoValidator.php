<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class OrcamentoValidator extends LaravelValidator
{
    protected $rules =
        [
            'tipoServico' => 'required|max:50',
            'formato' => 'required|max:50',
            'subtrato' => 'required|max:50',
            'quantidade' => 'required|max:50',
            'cores' => 'required|max:50',
            'laminacao' => 'required|max:50',
            'acabamento' => 'required|max:50',
            'largura' => 'required|max:20',
            'comprimento' => 'required|max:20',
            'empresa' => 'required|max:80',
            'nome' => 'required|max:80',
            'email' => 'required|max:80',
            'telefone' => 'required|max:30',
            'cidade' => 'required|max:50',
            'uf' => 'required|max:4',
            'anexo' => 'required|image|mimes:pdf|max:10000'
        ];

}