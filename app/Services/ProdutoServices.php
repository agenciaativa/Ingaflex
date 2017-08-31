<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 16:59
 */

namespace Ingaflex\Services;

use Dotenv\Exception\ValidationException;
use Illuminate\Filesystem\Filesystem;
use Ingaflex\Repositories\ProdutosRepository;
use Ingaflex\Validators\ProdutoValidator;
use Illuminate\Contracts\Filesystem\Factory as Storage;


class ProdutoServices
{
    protected $repository;
    private $validator;
    private $filesystem;
    private $storage;

    /**
     * ProdutoServices constructor.
     * @param ProdutosRepository $repository
     * @param ProdutoValidator $validator
     * @param Filesystem $filesystem
     * @param Storage $storage
     */

    public function __construct(ProdutosRepository $repository, ProdutoValidator $validator, Filesystem $filesystem, Storage $storage)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->filesystem = $filesystem;
        $this->storage = $storage;
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

    public function createFile(array $data)
    {
        $produto = $this->repository->find($data['produtos_id']);
        $productFile = $produto->files()->create($data);
        $this->storage->put('ingaflex'.md5($productFile->id).'.'.$data['extension'], $this->filesystem->get($data['file']));
    }
}