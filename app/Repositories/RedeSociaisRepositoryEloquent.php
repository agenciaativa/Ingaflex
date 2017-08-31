<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 11:40
 */

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Clientes;
use Ingaflex\Entities\RedeSociais;
use Ingaflex\Entities\Slides;
use Prettus\Repository\Eloquent\BaseRepository;

class RedeSociaisRepositoryEloquent extends BaseRepository implements RedeSociaisRepository
{
    public function model()
    {
        return RedeSociais::class;
    }

}