<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class FraseHomeValidator extends LaravelValidator
{
    protected $rules =
        [
            'titulo' => 'required|max:255',
            'conteudo' => 'required'
        ];

}