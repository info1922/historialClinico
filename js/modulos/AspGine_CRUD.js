DatosPersonalesModul.controller('AspGine_CRUD', function ($scope, $http){
    $scope.Datos = [];
    
    /*Alta de Aspectos Ginecologicos*/
    $scope.AddAspGine = function(){
        $http.post('DBpages/dbAspGine.php?action=AddAspGine',{
            'id': $scope.id,
            'EmbarazoActual': $scope.EmbarazoActual,
            'HabitosAlimen': $scope.HabitosAlimen,
            'Planificacion': $scope.Planificacion,
            'Consistio': $scope.Consistio,
            'AcidoFolico': $scope.AcidoFolico,
            'Antojo': $scope.Antojo,
            'QueAlimentos': $scope.QueAlimentos,
            'NauseasVomitos': $scope.NauseasVomitos,
            'Mareos': $scope.Mareos,
        })
        .success(function(data, status, headers, config){
			console.log("Datos enviados exitosamente")
		})
		.error(function(data, status, headers, config){
			console.log("error al enviar los datos")
		});
    };

    $scope.getID = function () {
        $http.get("DBpages/dbAspGine.php?action=getID").success(function (data) {
            $scope.Datos = data;
        });
    }; 
    
});