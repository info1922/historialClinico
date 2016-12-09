DatosPersonalesModul.controller('DaPe_CRUD', function($scope, $http){
    
    $scope.Datos=[];
    
    /*Mostrar paciente*/
    // $scope.getDP = function () {
    //     $http.get("../../vistas/DBPages/dbDatosPer.php?action=getDP").success(function (data) {
    //         $scope.Datos = data;
    //     });
    // };

    /*Limpia cajas de texto*/
    $scope.limpiar = function(){

    	$scope.id = '';
    	$scope.nombre = '';
    	$scope.edad = '';
    	$scope.sexo = '';
    	$scope.fecha = '';
    	$scope.direccion = '';
    	$scope.telefono = '';
    	$scope.correo = '';
    	$scope.motivo = '';
    };

    /*Alta de un nuevo paciente*/
    $scope.AddPaciente = function(){
    	$http.post('DBpages/dbDatosPer.php?action=AddPaciente', {
    		'id': $scope.id,
    		'nombre': $scope.nombre,
    		'edad': $scope.edad,
    		'sexo': $scope.sexo,
    		'fecha': $scope.fecha,
    		'direccion': $scope.direccion,
    		'telefono': $scope.telefono,
    		'correo': $scope.correo,
    		'motivo': $scope.motivo, 
            
    	})
    	.success(function(data, status, headers, config){
    		$scope.limpiar();
    		console.log("Datos enviados exitosamente");
            validaSexo();
            

    	})
    	.error(function(data, status, headers, config){
    		console.log("error al enviar datos")
    	});

    };
    console.log($scope.nombre);
    function validaSexo(){
      if($scope.sexo == 'Femenino'){
        div =  document.getElementById('femenino');
        div.style.display = 'none';  
      };  
    };

});