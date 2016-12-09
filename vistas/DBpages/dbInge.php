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
    	case 'AddIngesta':
    		AddIngesta();
    		# code...
    		break;
    	case 'AddAnteFam':
    		AddAnteFam();
    		# code...
    		break;
    	case 'AddQuirurgica':
    		AddQuirurgica();
    		# code...
    		break;

    	case 'getID':
    		getID();
    		# code...
    		break;
    }

    /*Alta de Ingesta de medicamentos*/
    function AddIngesta(){
    	$data = json_decode(file_get_contents("php://input"));
    	$id = $data->id;
    	$Laxantes = $data->Laxantes;
    	$MotivoLaxante = $data->MotivoLaxante;
    	$Diureticos = $data->Diureticos;
    	$MotivoDiureticos = $data->MotivoDiureticos;
    	$Antiacidos = $data->Antiacidos;
    	$MotivoAntiacido = $data->MotivoAntiacido;
    	$Analgesicos = $data->Analgesicos;
    	$MotivoAnalgesico = $data->MotivoAnalgesico;

    	$qry = 'INSERT INTO i4ngestaparabajardepeso (id, Laxantes, MotivoLaxante, Diureticos, MotivoDiureticos, Antiacidos, MotivoAntiacido, Analgesicos, MotivoAnalgesico) VALUES ("'.$id.'", "'.$Laxantes.'", "'.$MotivoLaxante.'", "'.$Diureticos.'", "'.$MotivoDiureticos.'", "'.$Antiacidos.'", "'.$MotivoAntiacido.'", "'.$Analgesicos.'", "'.$MotivoAnalgesico.'")';

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

    	/* Alta de Antecedentes Familiares*/
    	function AddAnteFam(){
    		$data = json_decode(file_get_contents("php://input"));
    		$id = $data->id;
			$Obesidad = $data->Obesidad;
			$Diabetes = $data->Diabetes;
			$Cancer = $data->Cancer;
			$HTA = $data->HTA;
			$Hipercolesterolemia = $data->Hipercolesterolemia;
			$Hipertrigliceridemia = $data->Hipertrigliceridemia;

			$qry = 'INSERT INTO a5ntecedentesfamiliares (id, Obesidad, Diabetes, Cancer, HTA, Hipercolesterolemia, Hipertrigliceridemia) VALUES ("'.$id.'", "'.$Obesidad.'", "'.$Diabetes.'", "'.$Cancer.'", "'.$HTA.'", "'.$Hipercolesterolemia.'", "'.$Hipertrigliceridemia.'")';

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

    	/* Alta de Intervencion quirurgica*/
    	function AddQuirurgica(){
    		$data = json_decode(file_get_contents("php://input"));
    		$id = $data->id;
    		$Intervencion = $data->Intervencion;
			$QueAlimento = $data->QueAlimento;
			$FrecuenciaDesparacita = $data->FrecuenciaDesparacita;
			$UltimaVezDesp = $data->UltimaVezDesp;
			$ConsumeBeAlco = $data->ConsumeBeAlco;
			$ConsumeTabaco = $data->ConsumeTabaco;

			$qry = 'INSERT INTO i6ntervencionquirurgica (id, Intervencion, QueAlimento, FrecuenciaDesparacita, UltimaVezDesp, ConsumeBeAlco, ConsumeTabaco) VALUES("'.$id.'", "'.$Intervencion.'", "'.$QueAlimento.'", "'.$FrecuenciaDesparacita.'", "'.$UltimaVezDesp.'", "'.$ConsumeBeAlco.'", "'.$ConsumeTabaco.'")';
    	

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