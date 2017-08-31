<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class FraseProdutoValidator extends LaravelValidator
{
    protected $rules =
        [
            'titulo_oquefazemos' => 'required|max:255',
            'frase_oquefazemos' => 'required',
            'titulo_rotulos' => 'required|max:255',
            'frase_rotulos' => 'required',
            'titulo_suprimentos' => 'required|max:255',
            'frase_suprimentos' => 'required'
        ];

}