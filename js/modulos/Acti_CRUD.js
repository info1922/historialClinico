DatosPersonalesModul.controller('Acti_CRUD', function ($scope, $http) {
	$scope.Datos = [];

	/*Alta de Actividades*/

	$scope.AddActividades = function(){
		$http.post('DBpages/dbActi.php?action=AddActividades',{
			'id': $scope.id,
			'Rango': $scope.Rango,
			'EjercicioPractica': $scope.EjercicioPractica,
			'Frecuencia': $scope.Frecuencia,
			'Tiempo': $scope.Tiempo,
			'HaceComenzoActividad': $scope.HaceComenzoActividad,
			'MotivoActividad': $scope.MotivoActividad,
			'SintomasActividad': $scope.SintomasActividad,
			'Aspecto': $scope.Aspecto,
			'VasosAgua': $scope.VasosAgua,
			'MareosActividad': $scope.MareosActividad,

		})
		.success(function(data, status, headers, config){
			console.log("Datos enviados exitosamente")
		})
		.error(function(data, status, headers, config){
			console.log("error al enviar los datos")
		});
	};

	/*Mostrar el ID del paciente*/
	$scope.getID = function () {
        $http.get("DBpages/dbActi.php?action=getID").success(function (data) {
            $scope.Datos = data;
        });
    };


});