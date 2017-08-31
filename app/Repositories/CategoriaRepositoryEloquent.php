<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Categoria;
use Ingaflex\Presenters\CategoriasPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


class CategoriaRepositoryEloquent extends BaseRepository implements CategoriaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Categoria::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
