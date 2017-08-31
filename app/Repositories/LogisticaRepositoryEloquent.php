<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Categoria;
use Ingaflex\Entities\Logistica;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


class LogisticaRepositoryEloquent extends BaseRepository implements LogisticaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Logistica::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
