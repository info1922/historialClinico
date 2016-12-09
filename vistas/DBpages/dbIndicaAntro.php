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
    	case 'AddIndicaAntro':
    		AddIndicaAntro();
    		# code...
    		break;
    	case 'getID':
    		getID();
    		# code...
    		break;
    }

    /*Alta de Actividades*/
    function AddIndicaAntro(){
    	$data = json_decode(file_get_contents("php://input"));
    	$id = $data->id;
    	$PesoActual = $data->PesoActual;
    	$PesoHabitual = $data->PesoHabitual;
    	$Estatura = $data->Estatura;
    	$CircunferenciaCadera = $data->CircunferenciaCadera;
    	$CircunferenciaMuneca = $data->CircunferenciaMuneca;
    	$CircunferenciaCintura = $data->CircunferenciaCintura; 
    	$IMC = $data->IMC;
    	$PCS = $data->PCS;
    	$ICC = $data->ICC;
    	$CSS = $data->CSS;
        $CM = $data->CM; 
    	$TMB = $data->TMB;
    	$ETA = $data->ETA;
    	$ACT = $data->ACT;
    	$GET = $data->GET;

    	$qry = 'INSERT INTO i9ndicadoresantropome (id, PesoActual, PesoHabitual, CircunferenciaCadera, CircunferenciaMuneca, CircunferenciaCintura, IMC, PCS, ICC, CSS, CM, TMB, ETA, ACT, GET) VALUES ("'.$id.'", "'.$PesoActual.'", "'.$PesoHabitual.'", "'.$CircunferenciaCadera.'", "'.$CircunferenciaMuneca.'", "'.$CircunferenciaCintura.'", "'.$IMC.'" , "'.$PCS.'", "'.$ICC.'", "'.$CSS.'", "'.$CM.'", "'.$TMB.'", "'.$ETA.'", "'.$ACT.'", "'.$GET.'")';

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