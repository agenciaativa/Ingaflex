<?php

namespace Ingaflex\Http\Controllers;

use Illuminate\Http\Request;

use Ingaflex\Repositories\CategoriaRepository;
use Ingaflex\Repositories\SlidesRepository;
use Ingaflex\Services\CategoriaServices;
use Ingaflex\Services\SlidesServices;

class SlidesController extends Controller
{

    private $repository;
    private $service;

    /**
     * SlidesController constructor.
     * @param SlidesRepository $repository
     * @param SlidesServices $service
     */

    public function __construct(SlidesRepository $repository, SlidesServices $service)
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
