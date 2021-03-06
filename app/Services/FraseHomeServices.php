<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 16:59
 */

namespace Ingaflex\Services;

use Dotenv\Exception\ValidationException;
use Ingaflex\Repositories\FraseHomeRepository;
use Ingaflex\Repositories\NewsletterRepository;
use Ingaflex\Validators\FraseHomeValidator;
use Ingaflex\Validators\NewsletterValidator;

class FraseHomeServices
{
    protected $repository;
    private $validator;

    /**
     * FraseHomeServices constructor.
     * @param FraseHomeRepository $repository
     * @param FraseHomeValidator $validator
     */

    public function __construct(FraseHomeRepository $repository, FraseHomeValidator $validator)
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