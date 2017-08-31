'use strict';

angular.module('ativaApp', ['ui.router', 'ativaApp.states', 'ativaApp.base', 'ativaApp.controllers', 'ativaApp.directives', 'ativaApp.factories', 'ui.tinymce'])

	.config(['$urlRouterProvider', function($urlRouterProvider) {
		$urlRouterProvider
			.otherwise('/app');

	}]);

