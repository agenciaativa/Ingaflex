<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class LinhaDestaqueValidator extends LaravelValidator
{
    protected $rules =
        [
            'nome' => 'required|max:50',
            'file' => 'required|image',
            'status' => 'required|max:50'
        ];

}