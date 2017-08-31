'use strict';

(function() {
	function config($stateProvider) {
		$stateProvider
			.state('app.home', {
				url: '/app',
				templateUrl: 'partials/home.html',
				controller: 'homeController'
			})
            .state('app.configuracoes', {
                url: '/configuracoes',
                templateUrl: 'partials/configuracoes.html',
                controller: 'configController'
            })
            .state('app.manutencao', {
                url: '/manutencao',
                templateUrl: 'partials/manutencao.html',
                controller: 'manutencaoController'
            })
			.state('app.empresa', {
				url: '/empresa',
				templateUrl: 'partials/empresa.html',
				controller: 'empresaController'
			})
			.state('app.logistica', {
				url: '/logistica',
				templateUrl: 'partials/logistica.html',
				controller: 'logisticaController'
			})
        	.state('app.frase', {
				url: '/frase',
				templateUrl: 'partials/frasehome.html',
				controller: 'fraseHomeController'
        	})
		   .state('app.portfolio', {
				url: '/portfolio',
				templateUrl: 'partials/portfolio.html',
				controller: 'portfolioController'
			})
            .state('app.clientes', {
                url: '/clientes',
                templateUrl: 'partials/clientes.html',
                controller: 'clientesController'
            })
            .state('app.orcamentos', {
                url: '/orcamentos',
                templateUrl: 'partials/orcamentos.html',
                controller: 'orcamentosController'
            })
            .state('app.contatos', {
                url: '/contatos',
                templateUrl: 'partials/contatos.html',
                controller: 'contatosController'
            })
            .state('app.usuarios', {
                url: '/usuarios',
                templateUrl: 'partials/users.html',
                controller: 'usuariosController'
            })

	};

	config.$inject = ['$stateProvider'];

	angular.module('ativaApp.states', [])

		.config(config);
})();