<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 16:59
 */

namespace Ingaflex\Services;

use Dotenv\Exception\ValidationException;
use Ingaflex\Repositories\CategoriaRepository;
use Ingaflex\Repositories\LinhaDestaqueRepository;
use Ingaflex\Repositories\ParceirosRepository;
use Ingaflex\Repositories\SlidesRepository;
use Ingaflex\Validators\CategoriaValidator;
use Ingaflex\Validators\LinhaDestaqueValidator;
use Ingaflex\Validators\ParceirosValidator;
use Ingaflex\Validators\SlidesValidator;

class LinhaDestaqueServices
{
    protected $repository;
    private $validator;

    /**
     * ParceirosServices constructor.
     * @param LinhaDestaqueRepository $repository
     * @param LinhaDestaqueValidator $validator
     */

    public function __construct(LinhaDestaqueRepository $repository, LinhaDestaqueValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }catch (ValidationException $e)
        {
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }

    }

    public function update(array $data, $id)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        }catch (ValidationException $e)
        {
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }

    }
}