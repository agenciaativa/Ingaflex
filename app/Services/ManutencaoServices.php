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
use Ingaflex\Repositories\ManutencaoRepository;
use Ingaflex\Validators\CategoriaValidator;
use Ingaflex\Validators\ManutencaoValidator;

class ManutencaoServices
{
    protected $repository;
    private $validator;

    /**
     * ManutencaoServices constructor.
     * @param ManutencaoRepository $repository
     * @param ManutencaoValidator $validator
     */

    public function __construct(ManutencaoRepository $repository, ManutencaoValidator $validator)
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