<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class ReadeSocialValidator extends LaravelValidator
{
    protected $rules =
        [
            'titulo' => 'required|max:50',
            'file' => 'required|image',
            'url' => 'required|max:150',
            'status' => 'required|max:50'
        ];

}