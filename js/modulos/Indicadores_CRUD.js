DatosPersonalesModul.controller('Indicadores_CRUD', function ($scope, $http){
    $scope.Datos = [];
    
    /*Alta de Aspectos Ginecologicos*/
    $scope.AddIndicaAntro = function(){
        $http.post('DBpages/dbIndicaAntro.php?action=AddIndicaAntro',{
            'id': $scope.id,
            'PesoActual': $scope.PesoActual,
            'PesoHabitual': $scope.PesoHabitual,
            'Estatura': $scope.Estatura,
            'CircunferenciaCadera': $scope.CircunferenciaCadera,
            'CircunferenciaMuneca': $scope.CircunferenciaMuneca,
            'CircunferenciaCintura': $scope.CircunferenciaCintura,
            'IMC': $scope.IMC,
            'PCS': $scope.PCS,
            'ICC': $scope.ICC,
            'CSS': $scope.CSS,
            'CM': $scope.CM,
            'TMB': $scope.TMB,
            'ETA': $scope.ETA,
            'ACT': $scope.ACT,
            'GET': $scope.GET,
            
        })
        .success(function(data, status, headers, config){
			console.log("Datos enviados exitosamente")
		})
		.error(function(data, status, headers, config){
			console.log("error al enviar los datos")
		});
    };

    $scope.getID = function () {
        $http.get("DBpages/dbIndicaAntro.php?action=getID").success(function (data) {
            $scope.Datos = data;
        });
    };
    
    $scope.Evaluacion = function(){
        pesoactual = $scope.PesoActual;
        talla = $scope.Estatura;
        cc = $scope.CircunferenciaCintura;
        cca = $scope.CircunferenciaCadera;
        c1 = $scope.CircunferenciaMuneca;
        
        InMaCo();
        PeCoSa();
        InCiCa();
        CM1();
        tmb();
        
        //Si los datos son de mujer
        
        /*Calcula el IMC*/
        function InMaCo(){
            var inc = 0;
            var inc2 = 0;
            var inc3 = 0;
            inc = talla/100
            inc2 = Math.pow(inc, 2);
            var inc3 = pesoactual/inc2;
            $scope.IMC = inc3.toFixed(1);
            console.log(parseFloat(inc3).toFixed(1));


           };
        
        /*Calcula el PCS*/
        function PeCoSa(){
            var dac = 0;
            var cvc = 0;
            var dac1 = 0;
            var pcs1 = 0;
            var pcs2 = 0;
            var val = 0;
            var csd = 0;
            
            //PCS1
            dac = Math.pow(talla/100, 2);
            dac1 = dac * 21.5;
            pcs1 = dac1.toFixed(2);
            console.log(pcs1);
            
            //PCS2
            pcs2 = (talla-45)/2;
            console.log(pcs2);
            
            //Pcs
            cvc =Number(pcs1) + Number(pcs2);
            val = cvc/2;
            csd = val.toFixed(2)
            $scope.PCS = csd;
            console.log($scope.PCS + "PCS");
            
        };
        /*Calcula Indice circunferencia cadera*/
        function InCiCa(){
            var f = 0;
            f = cc/cca;
            f = f.toFixed(2);
            console.log(f);
            $scope.ICC = f;
            //Riesgo Androide
            if (f >= 0.84 && f <= 0.71){
                $scope.riesgo = "";
            }else if(f < 0.84 ){
                $scope.riesgo = "";
            }else if(f > 0.71){
                $scope.riesgo = "";
            };
        };
        
        /*Complexion por circunferencia muñeca*/
        function CM1(){
      
           var mm = talla/c1;
            $scope.CM = mm.toFixed(2);
            console.log($scope.CM);
        };
        
        /*Calcula TMB*/
        
        function tmb(){
            ss = 655 + 9.5*(pesoactual) + 1.85*(talla) - 4.68*(40);
            $scope.TMB = ss.toFixed(2);
            console.log($scope.TMB);
            
            s1 = ss * .10;
            $scope.ETA = s1.toFixed(3);
            
            s2 = ss * 1.3;
            $scope.ACT = s2.toFixed(2);
            
            s3 = s1 + s2;
            console.log(s1 + s2);
            $scope.GET = s3.toFixed(2) ;
            console.log($scope.GET);
        };
        
    };
    
});