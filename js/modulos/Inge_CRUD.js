DatosPersonalesModul.controller('Inge_CRUD', function ($scope, $http) {
	$scope.Datos = [];

	/* Alta de Ingesta para bajar de peso*/
	$scope.AddIngesta = function(){
		$http.post('DBpages/dbInge.php?action=AddIngesta', {
			'id': $scope.id,
			'Laxantes': $scope.Laxantes,
			'MotivoLaxante': $scope.MotivoLaxante,
			'Diureticos': $scope.Diureticos,
			'MotivoDiureticos': $scope.MotivoDiureticos,
			'Antiacidos': $scope.Antiacidos,
			'MotivoAntiacido': $scope.MotivoAntiacido,
			'Analgesicos': $scope.Analgesicos,
			'MotivoAnalgesico': $scope.MotivoAnalgesico,
		})
		.success(function(data, status, headers, config){
			console.log("Datos enviados exitosamente")
		})
		.error(function(data, status, headers, config){
			console.log("error al enviar los datos")
		});


	};
	/* Alta de Antecedentes Familiares*/
	$scope.AddAnteFam = function(){
		$http.post('DBpages/dbInge.php?action=AddAnteFam', {
			'id': $scope.id,
			'Obesidad': $scope.Obesidad,
			'Diabetes': $scope.Diabetes,
			'Cancer': $scope.Cancer,
			'HTA': $scope.HTA,
			'Hipercolesterolemia': $scope.Hipercolesterolemia,
			'Hipertrigliceridemia': $scope.Hipertrigliceridemia,
		})
		.success(function(data, status, headers, config){
			console.log("Datos enviados exitosamente")
		})
		.error(function(data, status, headers, config){
			console.log("error al enviar los datos")
		});

		};
	/* Alta de Intervencion quirurgica*/
	$scope.AddQuirurgica = function (){
		$http.post('DBpages/dbInge.php?action=AddQuirurgica', {
			'id': $scope.id,
			'Intervencion': $scope.Intervencion,
			'QueAlimento': $scope.QueAlimento,
			'FrecuenciaDesparacita': $scope.FrecuenciaDesparacita,
			'UltimaVezDesp': $scope.UltimaVezDesp,
			'ConsumeBeAlco': $scope.ConsumeBeAlco,
			'ConsumeTabaco': $scope.ConsumeTabaco,
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
        $http.get("DBpages/dbInge.php?action=getID").success(function (data) {
            $scope.Datos = data;
        });
    };

});