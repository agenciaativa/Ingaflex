angular.module('IngaflexApp.states', ['ui.router'])
	.config(function($stateProvider, $urlRouterProvider) {

	$urlRouterProvider.otherwise('/home');

	$stateProvider
		.state('home', {
			url: '/home',
			templateUrl: 'partials/home.html',
			controller: 'homeController'
		})
		.state('manutencao', {
			url: '/manutencao',
			templateUrl: 'partials/manutencao.html',
			controller: 'manutencaoController'
		})
        .state('configuracoes', {
            url: '/configuracoes',
            templateUrl: 'partials/configuracoes.html',
            controller: 'configuracoesController'
        })

});