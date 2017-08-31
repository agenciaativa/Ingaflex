<?php

namespace Ingaflex\Providers;

use Illuminate\Support\ServiceProvider;

class IngaflexRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Ingaflex\Repositories\ClienteRepository::class,
            \Ingaflex\Repositories\ClienteRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\CategoriaRepository::class,
            \Ingaflex\Repositories\CategoriaRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\ProdutosRepository::class,
            \Ingaflex\Repositories\ProdutosRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\UsuariosRepository::class,
            \Ingaflex\Repositories\UsuariosRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\ConfiguracoesRepository::class,
            \Ingaflex\Repositories\ConfiguracoesRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\EmpresaRepository::class,
            \Ingaflex\Repositories\EmpresaRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\NewsletterRepository::class,
            \Ingaflex\Repositories\NewsletterRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\OrcamentoRepository::class,
            \Ingaflex\Repositories\OrcamentoRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\SlidesRepository::class,
            \Ingaflex\Repositories\SlidesRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\RedeSociaisRepository::class,
            \Ingaflex\Repositories\RedeSociaisRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\LogisticaRepository::class,
            \Ingaflex\Repositories\LogisticaRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\GaleriaRepository::class,
            \Ingaflex\Repositories\GaleriaRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\GaleriaImagensRepository::class,
            \Ingaflex\Repositories\GaleriaImagensRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\FraseHomeRepository::class,
            \Ingaflex\Repositories\FraseHomeRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\ParceirosRepository::class,
            \Ingaflex\Repositories\ParceirosRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\LinhaDestaqueRepository::class,
            \Ingaflex\Repositories\LinhaDestaqueRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\FraseProdutoRepository::class,
            \Ingaflex\Repositories\FraseProdutoRepositoryEloquent::class
        );

        $this->app->bind(
            \Ingaflex\Repositories\ManutencaoRepository::class,
            \Ingaflex\Repositories\ManutencaoRepositoryEloquent::class
        );
    }
}
