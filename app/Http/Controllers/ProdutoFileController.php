<?php

namespace Ingaflex\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Ingaflex\Repositories\ProdutosRepository;
use Ingaflex\Services\ProdutoServices;

class ProdutoFileController extends Controller
{

    private $repository;
    private $service;

    /**
     * ProdutoController constructor.
     * @param ProdutosRepository $repository
     * @param ProdutoServices $service
     */
    public function __construct(ProdutosRepository $repository, ProdutoServices $service)
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

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $data['file'] = $file;
        $data['extension'] = $extension;
        $data['name'] = 'ingaflex'.md5($request->name);
        $data['produtos_id'] = $request->produtos_id;

        $this->service->createFile($data);

    }

    //MOSTRA POR ID
    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function prodId($id, $prodId)
    {
        return $this->repository->findWhere(['prod_id' => $id, 'id' => $prodId]);
    }

    //MOSTRA POR ID
    public function filter($id)
    {
        return $this->repository->findWhere(['prod_id' => $id]);
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
