<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Categoria;
use Ingaflex\Entities\Parceiros;
use Ingaflex\Entities\Slides;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


class ParceirosRepositoryEloquent extends BaseRepository implements ParceirosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Parceiros::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
