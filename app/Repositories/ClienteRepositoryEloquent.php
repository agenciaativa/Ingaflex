<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 11:40
 */

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Clientes;
use Prettus\Repository\Eloquent\BaseRepository;

class ClienteRepositoryEloquent extends BaseRepository implements ClienteRepository
{
    public function model()
    {
        return Clientes::class;
    }

}