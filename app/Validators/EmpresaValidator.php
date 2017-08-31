<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 17:14
 */

namespace Ingaflex\Validators;


use Prettus\Validator\LaravelValidator;

class EmpresaValidator extends LaravelValidator
{
    protected $rules =
        [
            'texto_empresa' => 'required',
            'texto_missao'  => 'required',
            'texto_visao' => 'required',
            'texto_valores' => 'required'
        ];

}