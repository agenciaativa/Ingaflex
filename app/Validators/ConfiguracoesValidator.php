<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class ConfiguracoesValidator extends LaravelValidator
{
    protected $rules =
        [
            'nome' => 'required|max:255',
            'url'  => 'required|max:255',
            'file' => 'required|max:255',
            'telefone' => 'required|14',
            'logo' => 'required|max:255',
            'endereco' => 'required|max:255',
            'bairro' => 'required|max:50',
            'cidade' => 'required|max:255',
            'estado' => 'required|max:30',
            'cep' => 'required|max:9',
        ];

}