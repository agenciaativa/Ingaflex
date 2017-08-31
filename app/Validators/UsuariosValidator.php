<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class UsuariosValidator extends LaravelValidator
{
    protected $rules =
        [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'username'  => 'required|max:255',
            'password' => 'required|max:16'
        ];

}