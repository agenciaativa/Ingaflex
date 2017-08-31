<?php


Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/o-que-fazemos', function () {
    return view('servicos');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/logistica', function () {
    return view('logistica');
});

Route::get('/orcamento', function () {
    return view('orcamento');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/contato', function () {
    return view('contato');
});

/*API LARAVEL*/

/*OAUTH*/
Route::post('oauth/access_token', function() {
    return response()->json(Authorizer::issueAccessToken());
});

Route::group(['middleware'=>'oauth'], function(){

    Route::resource('api/clientes', 'ClienteController', ['except' => ['create', 'edit']]);

    Route::resource('api/produtos', 'ProdutoController', ['except' => ['create', 'edit']]);

    Route::resource('api/categoria', 'CategoriaController', ['except' => ['create', 'edit']]);

    Route::group(['prefix' => 'api/categoria'], function(){

        Route::get('{id}/produtos', 'ProdutoController@filter');
        Route::get('{id}/produtos/{prodId}', 'ProdutoController@prodId');
        Route::post('{id}/produtos/{prodId}/file', 'ProdutoFileController@store');
        Route::put('{id}/produtos/{prodId}', 'ProdutoController@update');
        Route::delete('{id}/produtos/{prodId}', 'ProdutoController@delete');
    });

    Route::resource('api/usuarios', 'UsuariosController', ['except' => ['create', 'edit', ]]);

    Route::resource('api/configuracoes', 'ConfiguracoesController', ['except' => ['create', 'edit']]);

    Route::resource('api/contato', 'ContatoController', ['except' => ['create', 'edit']]);

    Route::resource('api/empresa', 'EmpresaController', ['except' => ['create', 'edit']]);

    Route::resource('api/newsletter', 'NewsletterController', ['except' => ['create', 'edit']]);

    Route::resource('api/orcamento', 'OrcamentoController', ['except' => ['create', 'edit']]);

    Route::resource('api/slides', 'SlidesController', ['except' => ['create', 'edit']]);

    Route::resource('api/redesocial', 'RedeSocialController', ['except' => ['create', 'edit']]);

    Route::resource('api/logistica', 'LogisticaController', ['except' => ['create', 'edit']]);

    Route::resource('api/galeria', 'GaleriaController', ['except' => ['create', 'edit']]);

    Route::resource('api/frasehome', 'FraseHomeController', ['except' => ['create', 'edit']]);

    Route::resource('api/parceiros', 'ParceirosController', ['except' => ['create', 'edit']]);

    Route::resource('api/linhadestaque', 'LinhaDestaqueController', ['except' => ['create', 'edit']]);

    Route::resource('api/fraseproduto', 'FraseProdutoController', ['except' => ['create', 'edit']]);

    Route::resource('api/manutencao', 'ManutencaoController', ['except' => ['create', 'edit']]);

    Route::group(['prefix' => 'api/galeria'], function(){

        Route::get('{id}/galeriaimagens', 'GaleriaImagensController@filter');
        Route::get('{id}/galeriaimagens/{galId}', 'GaleriaImagensController@prodId');
        Route::put('{id}/galeriaimagens/{galId}', 'GaleriaImagensController@update');
        Route::delete('{id}/galeriaimagens/{galId}', 'GaleriaImagensController@delete');
    });
});