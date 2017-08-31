<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 11:40
 */

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Configuracoes;
use Ingaflex\Entities\Contato;
use Prettus\Repository\Eloquent\BaseRepository;

class ContatoRepositoryEloquent extends BaseRepository implements ContatoRepository
{
    public function model()
    {
        return Contato::class;
    }

}