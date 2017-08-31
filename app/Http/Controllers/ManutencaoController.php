<?php

namespace Ingaflex\Http\Controllers;

use Illuminate\Http\Request;

use Ingaflex\Repositories\CategoriaRepository;
use Ingaflex\Repositories\ManutencaoRepository;
use Ingaflex\Services\CategoriaServices;
use Ingaflex\Services\ManutencaoServices;

class ManutencaoController extends Controller
{

    private $repository;
    private $service;

    /**
     * ManutencaoController constructor.
     * @param ManutencaoRepository $repository
     * @param ManutencaoServices $service
     */

    public function __construct(ManutencaoRepository $repository, ManutencaoServices $service)
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
    public function destroy($id)
    {
        $this->repository->delete($id);
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $this->service->update($request->all(), $id);
    }
}
