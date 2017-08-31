<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 16:59
 */

namespace Ingaflex\Services;


use Dotenv\Exception\ValidationException;
use Ingaflex\Repositories\FraseProdutoRepository;
use Ingaflex\Repositories\ProdutosRepository;
use Ingaflex\Validators\FraseProdutoValidator;
use Ingaflex\Validators\ProdutoValidator;

class FraseProdutoServices
{
    protected $repository;
    private $validator;

    /**
     * FraseProdutoServices constructor.
     * @param FraseProdutoRepository $repository
     * @param FraseProdutoValidator $validator
     */

    public function __construct(FraseProdutoRepository $repository, FraseProdutoValidator $validator)
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