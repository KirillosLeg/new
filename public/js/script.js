var app = angular.module('ang_app', []);

app.controller('fController', function($scope, $http) {
	$scope.book_delete = function(id){
		$http.delete('', id);
	};

	$scope.book_edit = function(id){
		$http.get(id+'/edit', id);
	}

})

