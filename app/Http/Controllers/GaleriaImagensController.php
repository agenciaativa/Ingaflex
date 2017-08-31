<?php

namespace Ingaflex\Http\Controllers;

use Illuminate\Http\Request;

use Ingaflex\Repositories\GaleriaImagensRepository;
use Ingaflex\Repositories\ProdutosRepository;
use Ingaflex\Services\GaleriaImagensServices;
use Ingaflex\Services\ProdutoServices;

class GaleriaImagensController extends Controller
{

    private $repository;
    private $service;

    /**
     * GaleriaImagensController constructor.
     * @param GaleriaImagensRepository $repository
     * @param GaleriaImagensServices $service
     */

    public function __construct(GaleriaImagensRepository $repository, GaleriaImagensServices $service)
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

    public function prodId($id, $galId)
    {
        return $this->repository->findWhere(['gal_id' => $id, 'id' => $galId]);
    }

    //MOSTRA POR ID
    public function filter($id)
    {
        return $this->repository->findWhere(['gal_id' => $id]);
    }

    //REMOVE
    public function destroy($galId)
    {
        $this->repository->delete($galId);
    }

    //REMOVE
    public function delete($id, $galId)
    {
        $this->repository->delete($galId);
    }

    //UPDATE
    public function update(Request $request, $galId)
    {
        $this->service->update($request->all(), $galId);
    }
}
