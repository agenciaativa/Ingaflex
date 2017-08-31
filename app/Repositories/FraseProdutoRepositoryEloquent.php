<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\FraseProduto;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Ingaflex\Validators\ProdutosValidator;

/**
 * Class FraseProdutoRepositoryEloquent
 * @package namespace Ingaflex\Repositories;
 */
class FraseProdutoRepositoryEloquent extends BaseRepository implements FraseProdutoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return FraseProduto::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
