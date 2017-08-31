<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 11:40
 */

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Clientes;
use Ingaflex\Entities\Empresa;
use Prettus\Repository\Eloquent\BaseRepository;

class EmpresaRepositoryEloquent extends BaseRepository implements EmpresaRepository
{
    public function model()
    {
        return Empresa::class;
    }

}