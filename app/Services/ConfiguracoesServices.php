<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 16:59
 */

namespace Ingaflex\Services;


use Dotenv\Exception\ValidationException;
use Ingaflex\Repositories\ClienteRepository;
use Ingaflex\Repositories\ConfiguracoesRepository;
use Ingaflex\Validators\ClienteValidator;
use Ingaflex\Validators\ConfiguracoesValidator;

class ConfiguracoesServices
{
    protected $repository;
    private $validator;

    /**
     * ConfiguracoesServices constructor.
     * @param ConfiguracoesRepository $repository
     * @param ConfiguracoesValidator $validator
     */

    public function __construct(ConfiguracoesRepository $repository, ConfiguracoesValidator $validator)
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