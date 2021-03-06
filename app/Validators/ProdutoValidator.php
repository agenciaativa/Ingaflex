<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class ProdutoValidator extends LaravelValidator
{
    protected $rules =
        [
            'nome' => 'required|max:255',
            'descricao'  => 'required',
            'file' => 'required|max:255'
        ];

}