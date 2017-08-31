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
use Ingaflex\Validators\CategoriaValidator;

class CategoriaServices
{
    protected $repository;
    private $validator;

    /**
     * CategoriaServices constructor.
     * @param CategoriaRepository $repository
     * @param CategoriaValidator $validator
     */

    public function __construct(CategoriaRepository $repository, CategoriaValidator $validator)
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