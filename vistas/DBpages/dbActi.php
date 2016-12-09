<?php 
	$host      = "localhost"; 
    $user      = "root"; 
    $pass      = ""; 
    $database  = "appn";
    $con       = mysql_connect($host,$user,$pass);

    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }

    //echo 'Connected successfully'; 
    
    mysql_select_db($database,$con); 

    switch ($_GET['action']) {
    	case 'AddActividades':
    		AddActividades();
    		# code...
    		break;
    	case 'getID':
    		getID();
    		# code...
    		break;
    }

    /*Alta de Actividades*/
    function AddActividades(){
    	$data = json_decode(file_get_contents("php://input"));
    	$id = $data->id;
    	$Rango = $data->Rango;
    	$EjercicioPractica = $data->EjercicioPractica;
    	$Frecuencia = $data->Frecuencia;
    	$Tiempo = $data->Tiempo;
    	$HaceComenzoActividad = $data->HaceComenzoActividad;
    	$MotivoActividad = $data->MotivoActividad; 
    	$SintomasActividad = $data->SintomasActividad;
    	$Aspecto = $data->Aspecto;
    	$VasosAgua = $data->VasosAgua;
    	$MareosActividad = $data->MareosActividad;

    	$qry = 'INSERT INTO a7ctividades (id, Rango, EjercicioPractica, Frecuencia, Tiempo, HaceComenzoActividad, MotivoActividad, SintomasActividad, Aspecto, VasosAgua, MareosActividad) VALUES ("'.$id.'", "'.$Rango.'", "'.$EjercicioPractica.'", "'.$Frecuencia.'", "'.$Tiempo.'", "'.$HaceComenzoActividad.'", "'.$MotivoActividad.'" , "'.$SintomasActividad.'", "'.$Aspecto.'", "'.$VasosAgua.'", "'.$MareosActividad.'")';

    	$qry_res = mysql_query($qry);
    	if ($qry_res) {
    		$arr = array('msg' => "Success!!", 'error' => '');
    		$jsn = json_encode($arr);
    		# code...
    	}else{
    		$arr = array('msg' => "", 'error' => 'Error al insertar datos');
            $jsn = json_encode($arr);
    	}

    };

    	function getID(){
    	$qry = mysql_query('SELECT id, nombre from d1atospersonales');
    	$data = array();

    	while ($rows = mysql_fetch_array($qry)) {
    		$data[] = array(
    			"id" => $rows['id'],
    			"nombre" => $rows['nombre']
    			);
    		# code...
    	}
    	print_r(json_encode($data));
    	return json_encode($data);
    };
?>