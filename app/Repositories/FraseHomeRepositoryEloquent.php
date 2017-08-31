<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Categoria;
use Ingaflex\Entities\FraseHome;
use Ingaflex\Entities\Newsletter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


class FraseHomeRepositoryEloquent extends BaseRepository implements FraseHomeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */

    public function model()
    {
        return FraseHome::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
