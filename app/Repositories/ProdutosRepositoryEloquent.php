<?php

namespace Ingaflex\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Ingaflex\Entities\Produtos;
use Ingaflex\Validators\ProdutosValidator;

/**
 * Class ProdutosRepositoryEloquent
 * @package namespace Ingaflex\Repositories;
 */
class ProdutosRepositoryEloquent extends BaseRepository implements ProdutosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Produtos::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}


