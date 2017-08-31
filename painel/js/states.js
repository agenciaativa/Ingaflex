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
        /*.state('app.fale-conosco', {
           url: '/fale-conosco',
           templateUrl: 'partials/fale-conosco.html',
           controller: 'contatoController'
       })

       .state('app.newsletter', {
           url: '/newsletter',
           templateUrl: 'partials/newsletter.html',
           controller: 'newsletterController'
       })
       */
	};

	config.$inject = ['$stateProvider'];

	angular.module('ativaApp.states', [])

		.config(config);
})();

/*
angular.module('ativaApp.states', ['ui.router'])
	.config(function($stateProvider, $urlRouterProvider) {

	$urlRouterProvider.otherwise('/app');

	$stateProvider
		.state('app.home', {
			url: '/home',
			templateUrl: 'partials/home.html',
			controller: 'homeController'
		})
		.state('app.empresa', {
			url: '/empresa',
			templateUrl: 'partials/empresa.html',
			controller: 'homeController'
		})
		.state('app.servicos-solucoes', {
			url: '/servicos-solucoes',
			templateUrl: 'partials/servicos-solucoes.html',
			controller: 'homeController'
		})
		.state('app.clientes', {
			url: '/clientes',
			templateUrl: 'partials/clientes.html',
			controller: 'homeController'
		})
		.state('app.cases', {
			url: '/cases',
			templateUrl: 'partials/cases.html',
			controller: 'homeController'
		})
		.state('app.fale-conosco', {
			url: '/fale-conosco',
			templateUrl: 'partials/fale-conosco.html',
			controller: 'homeController'
		})
		.state('app.banners', {
			url: '/banners',
			templateUrl: 'partials/banners.html',
			controller: 'homeController'
		})
		.state('app.newsletter', {
			url: '/newsletter',
			templateUrl: 'partials/newsletter.html',
			controller: 'homeController'
		})
		.state('app.configuracoes', {
			url: '/configuracoes',
			templateUrl: 'partials/fale-conosco.html',
			controller: 'homeController'
		})
});*/