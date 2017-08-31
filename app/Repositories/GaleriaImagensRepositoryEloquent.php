<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\GaleriaImagens;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Ingaflex\Validators\ProdutosValidator;

/**
 * Class ProdutosRepositoryEloquent
 * @package namespace Ingaflex\Repositories;
 */
class GaleriaImagensRepositoryEloquent extends BaseRepository implements GaleriaImagensRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return GaleriaImagens::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
