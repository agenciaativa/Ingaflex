<?php

namespace Ingaflex\Repositories;

use Ingaflex\Entities\Categoria;
use Ingaflex\Entities\Newsletter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


class NewsletterRepositoryEloquent extends BaseRepository implements NewsletterRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */

    public function model()
    {
        return Newsletter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
