DatosPersonalesModul.controller('IndCli_CRUD', function($scope, $http){

	$scope.Datos=[];

	/*Alta de indicadores clinicos*/
	$scope.AddIndicadorC = function(){
		$http.post('DBpages/dbIndCli.php?action=AddIndicadorC', {
			'id': $scope.id,
			'Diarrea': $scope.Diarrea,
			'Estrenimiento': $scope.Estrenimiento,
			'Gastritis': $scope.Gastritis,
			'Ulcera': $scope.Ulcera,
			'Nauseas': $scope.Nauseas,
			'Pirosis': $scope.Pirosis,
			'Colitis': $scope.Colitis,
			'Vomito': $scope.Vomito,
			'Otros': $scope.Otros,
		})
		.success(function(data, status, headers, config){
			console.log("Datos enviados exitosamente")
		})
		.error(function(data, status, headers, config){
			console.log("error al enviar los datos")
		});
	};

	$scope.AddAlergias = function(){
		$http.post('DBpages/dbIndCli.php?action=AddAlergias', {
			'id': $scope.id,
			'Alergico': $scope.Alergico,
			'MotivodelaAlergia': $scope.MotivodelaAlergia,
			'EnfermedadDiagnosticada': $scope.EnfermedadDiagnosticada,
			'AnteriorPadecimiento': $scope.AnteriorPadecimiento,
		})
		.success(function(data, status, headers, config){
			console.log("Datos enviados exitosamente")
		})
		.error(function(data, status, headers, config){
			console.log("error al enviar los datos")
		});
	};

	/*Mostrar el ID de los pacientes*/
    $scope.getID = function () {
        $http.get("DBpages/dbIndCli.php?action=getID").success(function (data) {
            $scope.Datos = data;
        });
    };
});