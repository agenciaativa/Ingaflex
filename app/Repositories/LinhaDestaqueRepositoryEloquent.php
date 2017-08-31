<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Categoria;
use Ingaflex\Entities\LinhaDestaque;
use Ingaflex\Entities\Parceiros;
use Ingaflex\Entities\Slides;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


class LinhaDestaqueRepositoryEloquent extends BaseRepository implements LinhaDestaqueRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return LinhaDestaque::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
