<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 11:40
 */

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Configuracoes;
use Prettus\Repository\Eloquent\BaseRepository;

class ConfiguracoesRepositoryEloquent extends BaseRepository implements ConfiguracoesRepository
{
    public function model()
    {
        return Configuracoes::class;
    }

}