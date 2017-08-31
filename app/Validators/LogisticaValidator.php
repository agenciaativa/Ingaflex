<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class LogisticaValidator extends LaravelValidator
{
    protected $rules =
        [
            'titulo' => 'required|max:255',
            'texto_logistica' => 'required'
        ];

}