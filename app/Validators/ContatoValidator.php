<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class ContatoValidator extends LaravelValidator
{
    protected $rules =
        [
            'nome' => 'required|max:255',
            'email'  => 'required|max:255',
            'departamento' => 'required|max:255',
            'mensagem' => 'required',
        ];

}