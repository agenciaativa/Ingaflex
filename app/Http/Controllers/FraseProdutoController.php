<?php

namespace Ingaflex\Http\Controllers;

use Illuminate\Http\Request;

use Ingaflex\Repositories\FraseProdutoRepository;
use Ingaflex\Repositories\ProdutosRepository;
use Ingaflex\Services\FraseProdutoServices;
use Ingaflex\Services\ProdutoServices;

class FraseProdutoController extends Controller
{

    private $repository;
    private $service;

    /**
     * FraseProdutoController constructor.
     * @param FraseProdutoRepository $repository
     * @param FraseProdutoServices $service
     */

    public function __construct(FraseProdutoRepository $repository, FraseProdutoServices $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    //MOSTRA TODOS
    public function index()
    {
        return $this->repository->all();
    }

    //INSERE OS DADOS
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    //MOSTRA POR ID
    public function show($id)
    {
        return $this->repository->find($id);
    }

    //REMOVE
    public function destroy($prodId)
    {
        $this->repository->delete($prodId);
    }

    //REMOVE
    public function delete($id, $prodId)
    {
        $this->repository->delete($prodId);
    }

    //UPDATE
    public function update(Request $request, $prodId)
    {
        $this->service->update($request->all(), $prodId);
    }
}
