<?php
    //../../api/
    //include("../../api/dbconfig.php");
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
    	case 'AddIndicadorC':
    		# code...
    		AddIndicadorC();
    		break;
    	case 'AddAlergias':
    		AddAlergias();
    		break;

    	case 'getID':
    		getID();
    		break;
    }

    function AddIndicadorC(){
    	$data = json_decode(file_get_contents("php://input"));
    	$id = $data->id;
    	$Diarrea = $data->Diarrea;
    	$Estrenimiento = $data->Estrenimiento;
    	$Gastritis = $data->Gastritis;
    	$Ulcera = $data->Ulcera;
    	$Nauseas = $data->Nauseas;
    	$Pirosis = $data->Pirosis;
    	$Colitis = $data->Colitis;
    	$Vomito = $data->Vomito;
    	$Otros = $data->Otros;

    	$qry = 'INSERT INTO i2ndicadoresclinicos (id, Diarrea, Estrenimiento, Gastritis, Ulcera, Nauseas, Pirosis, Colitis, Vomito, Otros) VALUES ("'.$id.'","'.$Diarrea.'", "'.$Estrenimiento.'", "'.$Gastritis.'", "'.$Ulcera.'", "'.$Nauseas.'", "'.$Pirosis.'", "'.$Colitis.'", "'.$Vomito.'", "'.$Otros.'")';

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

    function AddAlergias(){
    	$data = json_decode(file_get_contents("php://input"));
    	$id = $data->id;
    	$Alergico = $data->Alergico;
    	$MotivodelaAlergia = $data->MotivodelaAlergia;
    	$EnfermedadDiagnosticada = $data->EnfermedadDiagnosticada;
    	$AnteriorPadecimiento = $data->AnteriorPadecimiento;

    	$qry = 'INSERT INTO a3lergias (id, Alergico, MotivodelaAlergia, EnfermedadDiagnosticada, AnteriorPadecimiento) VALUES ("'.$id.'", "'.$Alergico.'", "'.$MotivodelaAlergia.'", "'.$EnfermedadDiagnosticada.'", "'.$AnteriorPadecimiento.'")';

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
    }

?>