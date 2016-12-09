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
    	case 'AddAspGine':
    		AddAspGine();
    		# code...
    		break;
    	case 'getID':
    		getID();
    		# code...
    		break;
    }

    /*Alta de Actividades*/
    function AddAspGine(){
    	$data = json_decode(file_get_contents("php://input"));
    	$id = $data->id;
    	$EmbarazoActual = $data->EmbarazoActual;
    	$HabitosAlimen = $data->HabitosAlimen;
    	$Planificacion = $data->Planificacion;
    	$Consistio = $data->Consistio;
    	$AcidoFolico = $data->AcidoFolico;
    	$Antojo = $data->Antojo; 
    	$QueAlimentos = $data->QueAlimentos;
    	$NauseasVomitos = $data->NauseasVomitos;
        $Mareos = $data->Mareos;


    	$qry = 'INSERT INTO g8inecologicos (id, EmbarazoActual, HabitosAlimen, Planificacion, Consistio, AcidoFolico, Antojo, QueAlimentos, NauseasVomitos, Mareos) VALUES ("'.$id.'", "'.$EmbarazoActual.'", "'.$HabitosAlimen.'", "'.$Planificacion.'", "'.$Consistio.'", "'.$AcidoFolico.'", "'.$Antojo.'" , "'.$QueAlimentos.'", "'.$NauseasVomitos.'", "'.$Mareos.'")';

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