DatosPersonalesModul.controller('Almacen_CRUD', function ($scope, $http) {
	$scope.Datos = [];

	/*Mostrar los Pacientes*/
    $scope.getPaciente = function () {
        $http.get("../../vistas/DBpages/dbAlmacen.php?action=getPaciente").success(function (data) {
            $scope.Datos = data;
        });
    };

    $scope.DeletePaciente = function (index) {
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=DeletePaciente", {
                'Paciente_id': index
            })
            .success(function (data, status, headers, config) {
                $scope.getPaciente();
            })
            .error(function (data, status, headers, config) {

            });
    };
    
    $scope.EditarPaciente = function (index){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente",{
            'Paciente_id': index
        })
        .success(function (data, status, headers, config){
            $scope.id = data[0]["id"],
                $scope.nombre = data[0]["nombre"],
                $scope.edad = data[0]["edad"],
                $scope.sexo = data[0]["sexo"],
                $scope.fecha = data[0]["fecha"],
                $scope.direccion = data[0]["direccion"],
                $scope.telefono = data[0]["telefono"],
                $scope.correo = data[0]["correo"],
                $scope.motivo = data[0]["motivo"];
            
        })
        .error(function (data, status, headers, config) {

        })
        
    };
    
    $scope.ActualizarPaciente = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente", {
            'id': $scope.id,
            'nombre': $scope.nombre,
            'edad': $scope.edad,
            'sexo': $scope.sexo,
            'fecha': $scope.fecha,
            'direccion':  $scope.direccion,
            'telefono': $scope.telefono,
            'correo': $scope.correo,
            'motivo': $scope.motivo
        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };

    
    $scope.EditarPaciente2 = function (index){
            $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente2",{
                'Paciente_id': index
            })
            .success(function (data, status, headers, config){
                $scope.id = data[0]["id"],
                    $scope.Diarrea = data[0]["Diarrea"],
                    $scope.Estrenimiento = data[0]["Estrenimiento"],
                    $scope.Gastritis = data[0]["Gastritis"],
                    $scope.Ulcera = data[0]["Ulcera"],
                    $scope.Nauseas = data[0]["Nauseas"],
                    $scope.Pirosis = data[0]["Pirosis"],
                    $scope.Colitis = data[0]["Colitis"],
                    $scope.Vomito = data[0]["Vomito"],
                    $scope.Otros = data[0]["Otros"];

            })
            .error(function (data, status, headers, config) {

            })

        };
    
    $scope.ActualizarPaciente2 = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente2", {
            'id': $scope.id,
            'Diarrea': $scope.Diarrea,
            'Estrenimiento': $scope.Estrenimiento,
            'Gastritis': $scope.Gastritis,
            'Ulcera': $scope.Ulcera,
            'Nauseas': $scope.Nauseas,
            'Pirosis':  $scope.Pirosis,
            'Colitis': $scope.Colitis,
            'Vomito': $scope.Vomito,
            'Otros': $scope.Otros
        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };
    
    $scope.EditarPaciente22 = function (index){
            $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente22",{
                'Paciente_id': index
            })
            .success(function (data, status, headers, config){
                $scope.id = data[0]["id"],
                    $scope.Alergico = data[0]["Alergico"],
                    $scope.MotivodelaAlergia = data[0]["MotivodelaAlergia"],
                    $scope.EnfermedadDiagnosticada = data[0]["EnfermedadDiagnosticada"],
                    $scope.AnteriorPadecimiento = data[0]["AnteriorPadecimiento"];
            })
            .error(function (data, status, headers, config) {

            })

        };
    
    $scope.ActualizarPaciente22 = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente22", {
            'id': $scope.id,
            'Alergico': $scope.Alergico,
            'MotivodelaAlergia': $scope.MotivodelaAlergia,
            'EnfermedadDiagnosticada': $scope.EnfermedadDiagnosticada,
            'AnteriorPadecimiento': $scope.AnteriorPadecimiento
        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };
    
    $scope.EditarPaciente3 = function (index){
            $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente3",{
                'Paciente_id': index
            })
            .success(function (data, status, headers, config){
                $scope.id = data[0]["id"],
                    $scope.Laxantes = data[0]["Laxantes"],
                    $scope.MotivoLaxante = data[0]["MotivoLaxante"],
                    $scope.Diureticos = data[0]["Diureticos"],
                    $scope.MotivoDiureticos = data[0]["MotivoDiureticos"],
                    $scope.Antiacidos = data[0]["Antiacidos"],
                    $scope.MotivoAntiacido = data[0]["MotivoAntiacido"],
                    $scope.Analgesicos = data[0]["Analgesicos"],
                    $scope.MotivoAnalgesico = data[0]["MotivoAnalgesico"];
            })
            .error(function (data, status, headers, config) {

            })

        };
    
    $scope.ActualizarPaciente3 = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente3", {
            'id': $scope.id,
            'Laxantes': $scope.Laxantes,
            'MotivoLaxante': $scope.MotivoLaxante,
            'Diureticos': $scope.Diureticos,
            'MotivoDiureticos': $scope.MotivoDiureticos,
            'Antiacidos': $scope.Antiacidos,
            'MotivoAntiacido': $scope.MotivoAntiacido,
            'Analgesicos': $scope.Analgesicos,
            'MotivoAnalgesico': $scope.MotivoAnalgesico
        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };
    
    $scope.EditarPaciente33 = function (index){
            $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente33",{
                'Paciente_id': index
            })
            .success(function (data, status, headers, config){
                $scope.id = data[0]["id"],
                    $scope.Obesidad = data[0]["Obesidad"],
                    $scope.Diabetes = data[0]["Diabetes"],
                    $scope.Cancer = data[0]["Cancer"],
                    $scope.HTA = data[0]["HTA"],
                    $scope.Hipercolesterolemia = data[0]["Hipercolesterolemia"],
                    $scope.Hipertrigliceridemia = data[0]["Hipertrigliceridemia"];

            })
            .error(function (data, status, headers, config) {

            })

        };
    $scope.ActualizarPaciente33 = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente33", {
            'id': $scope.id,
            'Obesidad': $scope.Obesidad,
            'Diabetes': $scope.Diabetes,
            'Cancer': $scope.Cancer,
            'HTA': $scope.HTA,
            'Hipercolesterolemia': $scope.Hipercolesterolemia,
            'Hipertrigliceridemia': $scope.Hipertrigliceridemia

        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };
    
    $scope.EditarPaciente333 = function (index){
            $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente333",{
                'Paciente_id': index
            })
            .success(function (data, status, headers, config){
                $scope.id = data[0]["id"],
                    $scope.Intervencion = data[0]["Intervencion"],
                    $scope.QueAlimento = data[0]["QueAlimento"],
                    $scope.FrecuenciaDesparacita = data[0]["FrecuenciaDesparacita"],
                    $scope.UltimaVezDesp = data[0]["UltimaVezDesp"],
                    $scope.ConsumeBeAlco = data[0]["ConsumeBeAlco"],
                    $scope.ConsumeTabaco = data[0]["ConsumeTabaco"];

            })
            .error(function (data, status, headers, config) {

            })

        };
    
    $scope.ActualizarPaciente333 = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente333", {
            'id': $scope.id,
            'Intervencion': $scope.Intervencion,
            'QueAlimento': $scope.QueAlimento,
            'FrecuenciaDesparacita': $scope.FrecuenciaDesparacita,
            'UltimaVezDesp': $scope.UltimaVezDesp,
            'ConsumeBeAlco': $scope.ConsumeBeAlco,
            'ConsumeTabaco': $scope.ConsumeTabaco

        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };
    
    $scope.EditarPaciente4 = function (index){
            $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente4",{
                'Paciente_id': index
            })
            .success(function (data, status, headers, config){
                $scope.id = data[0]["id"],
                    $scope.Rango = data[0]["Rango"],
                    $scope.EjercicioPractica = data[0]["EjercicioPractica"],
                    $scope.Frecuencia = data[0]["Frecuencia"],
                    $scope.Tiempo = data[0]["Tiempo"],
                    $scope.HaceComenzoActividad = data[0]["HaceComenzoActividad"],
                    $scope.MotivoActividad = data[0]["MotivoActividad"],
                    $scope.SintomasActividad = data[0]["SintomasActividad"],
                    $scope.Aspecto = data[0]["Aspecto"],
                    $scope.VasosAgua = data[0]["VasosAgua"],
                    $scope.MareosActividad = data[0]["MareosActividad"];

            })
            .error(function (data, status, headers, config) {

            })

        };
    
    $scope.ActualizarPaciente4 = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente4", {
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
            'MareosActividad': $scope.MareosActividad

        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };
    
    $scope.EditarPaciente5 = function (index){
            $http.post("../../vistas/DBpages/dbAlmacen.php?action=EditarPaciente5",{
                'Paciente_id': index
            })
            .success(function (data, status, headers, config){
                $scope.id = data[0]["id"],
                    $scope.EmbarazoActual = data[0]["EmbarazoActual"],
                    $scope.HabitosAlimen = data[0]["HabitosAlimen"],
                    $scope.Planificacion = data[0]["Planificacion"],
                    $scope.Consistio = data[0]["Consistio"],
                    $scope.AcidoFolico = data[0]["AcidoFolico"],
                    $scope.Antojo = data[0]["Antojo"],
                    $scope.QueAlimentos = data[0]["QueAlimentos"],
                    $scope.NauseasVomitos = data[0]["NauseasVomitos"],
                    $scope.Mareos = data[0]["Mareos"];
                    

            })
            .error(function (data, status, headers, config) {

            })

        };
    
    $scope.ActualizarPaciente5 = function(){
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=ActualizarPaciente5", {
            'id': $scope.id,
            'EmbarazoActual': $scope.EmbarazoActual,
            'HabitosAlimen': $scope.HabitosAlimen,
            'Planificacion': $scope.Planificacion,
            'Consistio': $scope.Consistio,
            'AcidoFolico': $scope.AcidoFolico,
            'Antojo': $scope.Antojo,
            'QueAlimentos': $scope.QueAlimentos,
            'NauseasVomitos': $scope.NauseasVomitos,
            'Mareos': $scope.Mareos
            

        })
        .success(function (data, status, headers, config) {
                $scope.getPaciente();

        })
        .error(function (data, status, headers, config) {
            
        });
        
    };
  
    $scope.PDF = function(index){
        
        
        $http.post("../../vistas/DBpages/dbAlmacen.php?action=PDF",{
            'Paciente_id': index
        })
        
        .success(function (data, status, headers, config){
             var Dat = new Date();
            var dd = Dat.getDate();
                $scope.id = data[0]["id"],
                //Datos personales
                $scope.nombre = data[0]["nombre"],
                $scope.edad = data[0]["edad"],
                $scope.sexo = data[0]["sexo"],
                $scope.fecha = data[0]["fecha"],
                $scope.direccion = data[0]["direccion"],
                $scope.telefono = data[0]["telefono"],
                $scope.correo = data[0]["correo"],
                $scope.motivo = data[0]["motivo"],
                //Indicadores clinicos
                $scope.Diarrea = data[0]["Diarrea"],
                $scope.Estrenimiento = data[0]["Estrenimiento"],
                $scope.Gastritis = data[0]["Gastritis"],
                $scope.Ulcera = data[0]["Ulcera"],
                $scope.Nauseas = data[0]["Nauseas"],
                $scope.Pirosis = data[0]["Pirosis"],
                $scope.Colitis = data[0]["Colitis"],
                $scope.Vomito = data[0]["Vomito"],
                $scope.Otros = data[0]["Otros"],
                //Alergias
                $scope.Alergico = data[0]["Alergico"],
                $scope.MotivodelaAlergia = data[0]["MotivodelaAlergia"],
                $scope.EnfermedadDiagnosticada = data[0]["EnfermedadDiagnosticada"],
                $scope.AnteriorPadecimiento = data[0]["AnteriorPadecimiento"],
                //Ingesta de medicamento
                $scope.Laxantes = data[0]["Laxantes"],
                $scope.MotivoLaxante = data[0]["MotivoLaxante"],
                $scope.Diureticos = data[0]["Diureticos"],
                $scope.MotivoDiureticos = data[0]["MotivoDiureticos"],
                $scope.Antiacidos = data[0]["Antiacidos"],
                $scope.MotivoAntiacido = data[0]["MotivoAntiacido"],
                $scope.Analgesicos = data[0]["Analgesicos"],
                $scope.MotivoAnalgesico = data[0]["MotivoAnalgesico"],
                //Antecedentes familiares
                $scope.Obesidad = data[0]["Obesidad"],
                $scope.Diabetes = data[0]["Diabetes"],
                $scope.Cancer = data[0]["Cancer"],
                $scope.HTA = data[0]["HTA"],
                $scope.Hipercolesterolemia = data[0]["Hipercolesterolemia"],
                $scope.Hipertrigliceridemia = data[0]["Hipertrigliceridemia"],
                //Intervencion
                $scope.Intervencion = data[0]["Intervencion"],
                $scope.QueAlimento = data[0]["QueAlimento"],
                $scope.FrecuenciaDesparacita = data[0]["FrecuenciaDesparacita"],
                $scope.UltimaVezDesp = data[0]["UltimaVezDesp"],
                $scope.ConsumeBeAlco = data[0]["ConsumeBeAlco"],
                $scope.ConsumeTabaco = data[0]["ConsumeTabaco"],
                //Actividad
                $scope.Rango = data[0]["Rango"],
                $scope.EjercicioPractica = data[0]["EjercicioPractica"],
                $scope.Frecuencia = data[0]["Frecuencia"],
                $scope.Tiempo = data[0]["Tiempo"],
                $scope.HaceComenzoActividad = data[0]["HaceComenzoActividad"],
                $scope.MotivoActividad = data[0]["MotivoActividad"],
                $scope.SintomasActividad = data[0]["SintomasActividad"],
                $scope.Aspecto = data[0]["Aspecto"],
                $scope.VasosAgua = data[0]["VasosAgua"],
                $scope.MareosActividad = data[0]["MareosActividad"];

            //http://pdfmake.org
            var docDefinition = { 
                 header: {
                    columns: [
                        {text: 'Universidad de la Sierra Sur', margin: 10, fontSize: 7 }
                    ],
                   
                },
                footer: {
                    columns: [
                    
                        {text: dd, margin: 10, fontSize: 7 }
                    ],
                    
                },
            content: [
              
                { text: 'Historial clínico nutricional', style: 'header', alignment: 'center' },
                { text: 'Datos personales', style: 'subheader' },

                {
                  	style: 'tableExample',
						table: {
								body: [
										[{text: 'Id', style: 'tableHeader'}, {text: 'Nombre', style: 'tableHeader'}, {text: 'Edad', style: 'tableHeader'}, {text: 'Sexo', style: 'tableHeader'}, {text: 'Fecha de nacimiento', style: 'tableHeader'}, {text: 'Dirección', style: 'tableHeader'}, {text: 'Telefono', style:  'tableHeader'}, {text: 'Correo electronico', style: 'tableHeader'}, {text: 'Motivo de la consulta', style: 'tableHeader'} ],
										[$scope.id, $scope.nombre, $scope.edad, $scope.sexo, $scope.fecha, $scope.direccion, $scope.telefono, $scope.correo, $scope.motivo]
								]
						}  
                },
                { text: 'Indicadores clínicos (Problemas actuales)', style: 'subheader' },

                {
                  	style: 'tableExample',
						table: {
                                
								body: [
										[{text: 'Diarrea', style: 'tableHeader'}, {text: 'Estreñimiento', style: 'tableHeader'}, {text: 'Gastritis', style: 'tableHeader'}, {text: 'Ulcera', style: 'tableHeader'}, {text: 'Nauseas', style: 'tableHeader'}, {text: 'Pirosis', style: 'tableHeader'}, {text: 'Colitis', style:  'tableHeader'}, {text: 'Vomito', style: 'tableHeader'}, {text: 'Otros', style: 'tableHeader'} ],
										[$scope.Diarrea, $scope.Estrenimiento, $scope.Gastritis, $scope.Ulcera, $scope.Nauseas, $scope.Pirosis, $scope.Colitis, $scope.Vomito, $scope.Otros]
								]
						}  
                },
                { text: 'Alergias', style: 'subheader' },

                {
                  	style: 'tableExample',
						table: {
								body: [
										[{text: 'Alérgico a algún alimento', style: 'tableHeader'}, {text: 'Por que:', style: 'tableHeader'}, {text: 'Padece alguna enfermedad diagnosticada', style: 'tableHeader'}, {text: 'Anteriormente ha tenido algún padecimiento', style: 'tableHeader'}],
										[$scope.Alergico, $scope.MotivodelaAlergia, $scope.EnfermedadDiagnosticada, $scope.AnteriorPadecimiento]
								]
						}  
                },
               { text: 'Ingesta de medicamento para bajar de peso', style: 'subheader' },

                {
                  	style: 'tableExample',
						table: {
                                
								body: [
										[{text: 'Laxantes', style: 'tableHeader'}, {text: 'Por que:', style: 'tableHeader'}, {text: 'Diuréticos', style: 'tableHeader'}, {text: 'Por que:', style: 'tableHeader'}, {text: 'Antiácidos', style: 'tableHeader'}, {text: 'Por que:', style: 'tableHeader'}, {text: 'Analgésicos', style: 'tableHeader'}, {text: 'Por que:', style: 'tableHeader'}],
										[$scope.Laxantes, $scope.MotivoLaxante, $scope.Diureticos, $scope.MotivoDiureticos, $scope.Antiacidos, $scope.MotivoAntiacido, $scope.Analgesicos, $scope.MotivoAnalgesico]
								]
						}  
                },
                { text: 'Antecedentes familiares', style: 'subheader' },

                {
                  	style: 'tableExample',
						table: {
								body: [
										[{text: 'Obesidad', style: 'tableHeader'}, {text: 'Diabetes', style: 'tableHeader'}, {text: 'Cáncer', style: 'tableHeader'}, {text: 'HTA', style: 'tableHeader'}, {text: 'Hipercolesterolemia', style: 'tableHeader'}, {text: 'Hipertrigliceridemia', style: 'tableHeader'}],
										[$scope.Obesidad, $scope.Diabetes, $scope.Cancer, $scope.HTA, $scope.Hipercolesterolemia, $scope.Hipertrigliceridemia]
								]
						}  
                },
                {	text: '¿Ha tenido alguna intervención quirúrgica que no le permita el consumo de algún alimento? \n', fontSize: 10, bold: true  },
                {
                    text: $scope.Intervencion,
                    fontSize: 9
                },
                {	text: '\n ¿Qué alimento? ', fontSize: 10, bold: true  },
                {
                    text:$scope.QueAlimento,
                    fontSize: 9
                },
                {	text: ' \n ¿Cuál es la frecuencia con la cual se desparacita?', fontSize: 10, bold: true  },
                {
                    text:$scope.FrecuenciaDesparacita,
                    fontSize: 9
                },
                {	text: '\n ¿Cuándo fue la última vez que se desparacito? ', fontSize: 10, bold: true  },
                {
                    text:$scope.UltimaVezDesp,
                    fontSize: 9
                },
                {	text: '\n ¿Consume bebidas alcohólicas? ', fontSize: 10, bold: true  },
                {
                    text:$scope.ConsumeBeAlco,
                    fontSize: 9
                },
                {	text: '\n ¿Consume tabaco? ', fontSize: 10, bold: true  },
                {
                    text:$scope.ConsumeTabaco,
                    fontSize: 9
                },
                { text: 'Actividades', style: 'subheader', pageBreak: 'before'},

                {
                  	style: 'tableExample',
						table: {
								body: [
										[{text: 'Rango', style: 'tableHeader'}, {text: 'Ejercicio o deporte que practica', style: 'tableHeader'}, {text: 'Frecuencia/semana', style: 'tableHeader'}, {text: 'Tiempo (min)', style: 'tableHeader'}, {text: '¿Hace cuánto tiempo comenzó a realizar la actividad?', style: 'tableHeader'}, {text: '¿Cuál fue el motivo por el cual comenzó la actividad?', style: 'tableHeader'}, {text: 'Aspecto general que denota en usted mismo', style: 'tableHeader'}, {text: 'Cuantos vasos de agua consume al día ', style: 'tableHeader'}, {text: 'Padece de mareos durante la actividad física', style: 'tableHeader'}],
										[$scope.Rango, $scope.EjercicioPractica, $scope.Frecuencia, $scope.Tiempo, $scope.HaceComenzoActividad, $scope.MotivoActividad, $scope.SintomasActividad, $scope.VasosAgua, $scope.MareosActividad]
								]
						}  
                },
                
                
            ],
                styles: {
                    header: {
                        fontSize: 14,
                        bold: true,
                        margin: [0, 0, 0, 10]
                    },
                    subheader: {
                        fontSize: 10,
                        bold: true,
                        margin: [0, 10, 0, 5]
                    },
                    tableExample: {
                        fontSize: 9,
                        margin: [0, 5, 0, 15]
                    },
                    tableHeader: {
                        bold: true,
                        fontSize: 10,
                        color: 'black'
                    }
                },
                defaultStyle: {
                    // alignment: 'justify'
                }
            };
            
        pdfMake.createPdf(docDefinition).open();
            
        })
        .error(function (data, status, headers, config) {

        })
        
        
    };
    
});
