<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class GaleriaImagensValidator extends LaravelValidator
{
    protected $rules =
        [
            'nome' => 'required|max:255',
            'file' => 'required|max:255',
            'gal_id'  => 'required',
        ];

}