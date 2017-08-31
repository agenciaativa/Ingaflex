angular.module('ativaApp.controllers', [])
	.controller('sidebarController', ['$scope', function($scope) {
		$scope.$on('$viewContentLoaded', function() {
			var $layout = $('body').data('lte.layout');
			"undefined" != typeof $layout && $layout.activate();
			$('[data-widget="tree"]').tree();
		});
	}])

	.controller('homeController', ['$state', '$rootScope', '$scope', function($state, $rootScope, $scope) {
		var state = $state.current.name;
		$rootScope.state = 'app.home';
		$rootScope.sub = state;
		$rootScope.title = $rootScope.active_page = 'Home';

	}])

    .controller('logisticaController', ['$state', '$rootScope', '$scope', function($state, $rootScope, $scope) {
        var state = $state.current.name;
        $rootScope.state = 'app.logistica';
        $rootScope.sub = state;
        $rootScope.title = $rootScope.active_page = 'Logistica';

    }])

    .controller('fraseHomeController', ['$state', '$rootScope', '$scope', function($state, $rootScope, $scope) {
        var state = $state.current.name;
        $rootScope.state = 'app.frasehome';
        $rootScope.sub = state;
        $rootScope.title = $rootScope.active_page = 'Frase Destaque Home';

    }])

	.controller('empresaController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
		var state = $state.current.name;
		$rootScope.state = 'app.home';
		$rootScope.sub = state;
		$rootScope.title = $rootScope.active_page = 'A Empresa';

		$scope.getFile = function () {
			fileReader.readAsDataUrl($scope.file, $scope)
			.then(function(result) {
				$scope.imageSrc = result;
			});
		};
	}])

	.controller('portfolioController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
		var state = $state.current.name;
		$rootScope.state = 'app.home';
		$rootScope.sub = state;
		$rootScope.title = $rootScope.active_page = 'Portfolio';

		$scope.getFile = function () {
			fileReader.readAsDataUrl($scope.file, $scope)
			.then(function(result) {
				$scope.imageSrc = result;
			});
		};

	}])

	.controller('clientesController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
		var state = $state.current.name;
		$rootScope.state = 'app.home';
		$rootScope.sub = state;
		$rootScope.title = $rootScope.active_page = 'Clientes';
		
		$scope.getFile = function () {
			fileReader.readAsDataUrl($scope.file, $scope)
			.then(function(result) {
				$scope.imageSrc = result;
			});
		};

	}])

	.controller('orcamentosController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
		var state = $state.current.name;
		$rootScope.state = 'app.orcamentos';
		$rootScope.sub = state;
		$rootScope.title = $rootScope.active_page = 'Orçamentos';

		$scope.getFile = function () {
			fileReader.readAsDataUrl($scope.file, $scope)
			.then(function(result) {
				$scope.imageSrc = result;
			});
		};

		$scope.$on('$viewContentLoaded', function(){
			var config = {
				resize_enabled: false,
				height: 216
			};

		});
	}])

    .controller('contatosController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
        var state = $state.current.name;
        $rootScope.state = 'app.contatos';
        $rootScope.sub = state;
        $rootScope.title = $rootScope.active_page = 'Contatos';

        $scope.getFile = function () {
            fileReader.readAsDataUrl($scope.file, $scope)
                .then(function(result) {
                    $scope.imageSrc = result;
                });
        };

        $scope.$on('$viewContentLoaded', function(){
            var config = {
                resize_enabled: false,
                height: 216
            };

        });
    }])

    .controller('usuariosController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
        var state = $state.current.name;
        $rootScope.state = 'app.usuarios';
        $rootScope.sub = state;
        $rootScope.title = $rootScope.active_page = 'Usuários';

        $scope.getFile = function () {
            fileReader.readAsDataUrl($scope.file, $scope)
                .then(function(result) {
                    $scope.imageSrc = result;
                });
        };

        $scope.$on('$viewContentLoaded', function(){
            var config = {
                resize_enabled: false,
                height: 216
            };

        });
    }])

	.controller('newsletterController', ['$state', '$rootScope', '$scope', function($state, $rootScope, $scope) {
		var state = $state.current.name;
		$rootScope.state = $rootScope.sub = state;
		$rootScope.title = $rootScope.active_page = 'Newsletters';
	}])

    .controller('TinyMceController', ['$state', '$rootScope', '$scope', function($state, $rootScope, $scope) {
        $scope.tinymceModel = 'Initial content';

        $scope.getContent = function() {
            console.log('Editor content:', $scope.tinymceModel);
        };

        $scope.setContent = function() {
            $scope.tinymceModel = 'Time: ' + (new Date());
        };

        $scope.tinymceOptions = {
            plugins: 'link image code textcolor colorpicker',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code | forecolor backcolor',
			language: 'pt_BR'
        };
    }])

	.controller('configController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
		var state = $state.current.name;
		$rootScope.state = $rootScope.sub = state;
		$rootScope.title = $rootScope.active_page = 'Configurações Gerais';

		$scope.getFile = function () {
			fileReader.readAsDataUrl($scope.file, $scope)
			.then(function(result) {
				$scope.imageSrc = result;
			});
		};

		$scope.$on('$viewContentLoaded', function() {
			$('[data-mask]').inputmask({mask: ['(99) 9999-9999', '(99) 99999-9999']});
		});
	}])

    .controller('manutencaoController', ['$state', '$rootScope', '$scope', 'fileReader', function($state, $rootScope, $scope, fileReader) {
        var state = $state.current.name;
        $rootScope.state = $rootScope.sub = state;
        $rootScope.title = $rootScope.active_page = 'Modo Manutenção';

        $scope.getFile = function () {
            fileReader.readAsDataUrl($scope.file, $scope)
                .then(function(result) {
                    $scope.imageSrc = result;
                });
        };
    }])