<?php 
    include("Cezpdf.php");
    //include("Cpdf.php");
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
    	case 'getPaciente':
    		getPaciente();
    		# code...
    		break;
    	case 'DeletePaciente':
    		DeletePaciente();
    		# code...
    		break;
        case 'EditarPaciente':
            EditarPaciente();
            break;
        case 'ActualizarPaciente':
            ActualizarPaciente();
            break;
        case 'EditarPaciente2':
            EditarPaciente2();
            break;
        case 'ActualizarPaciente2':
            ActualizarPaciente2();
            break;
        case 'EditarPaciente22':
            EditarPaciente22();
            break;
        case 'ActualizarPaciente22':
            ActualizarPaciente22();
            break;
        case 'EditarPaciente3':
            EditarPaciente3();
            break;
        case 'ActualizarPaciente3':
            ActualizarPaciente3();
            break;
        case 'EditarPaciente33':
            EditarPaciente33();
            break;
        case 'ActualizarPaciente33':
            ActualizarPaciente33();
            break;
        case 'EditarPaciente333':
            EditarPaciente333();
            break;
        case 'ActualizarPaciente333':
            ActualizarPaciente333();
            break;
        case 'EditarPaciente4':
            EditarPaciente4();
            break;
        case 'ActualizarPaciente4':
            ActualizarPaciente4();
            break;
        case 'EditarPaciente5':
            EditarPaciente5();
            break;
        case 'ActualizarPaciente5':
            ActualizarPaciente5();
            break;
        case 'PDF':
            PDF();
            break;
        
    }

    function getPaciente(){
    $qry = mysql_query('SELECT id, nombre from d1atospersonales');
    $data= array();
    
    while ($rows = mysql_fetch_array($qry)){
    
        $data[] = array(
            "id" => $rows['id'],
            "nombre" => $rows['nombre']
            
        );
    }
    print_r(json_encode($data));
    return json_encode($data);
};

function DeletePaciente() {
        $data = json_decode(file_get_contents("php://input"));
        $index = $data -> Paciente_id;
        //print_r($data)   ;
        $del = mysql_query("DELETE FROM d1atospersonales WHERE id = ".$index);
        if ($del)
            echo "Eliminacion éxitosa";
            return true;
        return false;
    };


function EditarPaciente(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM d1atospersonales WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "nombre" => $rows['nombre'],
            "edad" => $rows['edad'],
            "sexo" => $rows['sexo'],
            "fecha" => $rows['fecha'],
            "direccion" => $rows['direccion'],
            "telefono" => $rows['telefono'],
            "correo" => $rows['correo'],
            "motivo" => $rows['motivo']
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};

function ActualizarPaciente(){
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id; 
    $nombre = $data->nombre; 
    $edad = $data->edad; 
    $sexo = $data->sexo; 
    $fecha = $data->fecha;
    $direccion = $data->direccion; 
    $telefono = $data->telefono; 
    $correo = $data->correo; 
    $motivo = $data->motivo;
    
    $qry = "UPDATE d1atospersonales SET nombre='".$nombre."', edad='".$edad."', sexo='".$sexo."', fecha='".$fecha."', direccion='".$direccion."', telefono='".$telefono."', correo='".$correo."', motivo='".$motivo."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => "Paciente Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};


function EditarPaciente2(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM i2ndicadoresclinicos WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "Diarrea" => $rows['Diarrea'],
            "Estrenimiento" => $rows['Estrenimiento'],
            "Gastritis" => $rows['Gastritis'],
            "Ulcera" => $rows['Ulcera'],
            "Nauseas" => $rows['Nauseas'],
            "Pirosis" => $rows['Pirosis'],
            "Colitis" => $rows['Colitis'],
            "Vomito" => $rows['Vomito'],
            "Otros" => $rows['Otros']
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};


function ActualizarPaciente2(){
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
    
    $qry = "UPDATE i2ndicadoresclinicos SET Diarrea='".$Diarrea."', Estrenimiento='".$Estrenimiento."', Gastritis='".$Gastritis."', Ulcera='".$Ulcera."', Nauseas='".$Nauseas."', Pirosis='".$Pirosis."', Colitis='".$Colitis."', Vomito='".$Vomito."', Otros='".$Otros."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => "Paciente IndCli Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};

function EditarPaciente22(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM a3lergias WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "Alergico" => $rows['Alergico'],
            "MotivodelaAlergia" => $rows['MotivodelaAlergia'],
            "EnfermedadDiagnosticada" => $rows['EnfermedadDiagnosticada'],
            "AnteriorPadecimiento" => $rows['AnteriorPadecimiento']
            
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};

function ActualizarPaciente22(){
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id; 
    $Alergico = $data->Alergico; 
    $MotivodelaAlergia = $data->MotivodelaAlergia; 
    $EnfermedadDiagnosticada = $data->EnfermedadDiagnosticada; 
    $AnteriorPadecimiento = $data->AnteriorPadecimiento;
    
    $qry = "UPDATE a3lergias SET Alergico='".$Alergico."', MotivodelaAlergia='".$MotivodelaAlergia."', EnfermedadDiagnosticada='".$EnfermedadDiagnosticada."', AnteriorPadecimiento='".$AnteriorPadecimiento."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => "Paciente Alergias Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};

function EditarPaciente3(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM i4ngestaparabajardepeso WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "Laxantes" => $rows['Laxantes'],
            "MotivoLaxante" => $rows['MotivoLaxante'],
            "Diureticos" => $rows['Diureticos'],
            "MotivoDiureticos" => $rows['MotivoDiureticos'],
            "Antiacidos" => $rows['Antiacidos'],
            "MotivoAntiacido" => $rows['MotivoAntiacido'],
            "Analgesicos" => $rows['Analgesicos'],
            "MotivoAnalgesico" => $rows['MotivoAnalgesico']
            
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};

function ActualizarPaciente3(){
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
    
    
    $qry = "UPDATE i4ngestaparabajardepeso SET Laxantes='".$Laxantes."', MotivoLaxante='".$MotivoLaxante."', Diureticos='".$Diureticos."', MotivoDiureticos='".$MotivoDiureticos."', Antiacidos='".$Antiacidos."', MotivoAntiacido='".$MotivoAntiacido."', Analgesicos='".$Analgesicos."', MotivoAnalgesico='".$MotivoAnalgesico."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => "Paciente ingesta Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};

function EditarPaciente33(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM a5ntecedentesfamiliares WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "Obesidad" => $rows['Obesidad'],
            "Diabetes" => $rows['Diabetes'],
            "Cancer" => $rows['Cancer'],
            "HTA" => $rows['HTA'],
            "Hipercolesterolemia" => $rows['Hipercolesterolemia'],
            "Hipertrigliceridemia" => $rows['Hipertrigliceridemia']
            
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};

function ActualizarPaciente33(){
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id; 
    $Obesidad = $data->Obesidad; 
    $Diabetes = $data->Diabetes; 
    $Cancer = $data->Cancer; 
    $HTA = $data->HTA;
    $Hipercolesterolemia = $data->Hipercolesterolemia;
    $Hipertrigliceridemia = $data->Hipertrigliceridemia;
    
    
    $qry = "UPDATE a5ntecedentesfamiliares SET Obesidad='".$Obesidad."', Diabetes='".$Diabetes."', Cancer='".$Cancer."', HTA='".$HTA."', Hipercolesterolemia='".$Hipercolesterolemia."', Hipertrigliceridemia='".$Hipertrigliceridemia."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => "Paciente antecedentes Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};

function EditarPaciente333(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM i6ntervencionquirurgica WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "Intervencion" => $rows['Intervencion'],
            "QueAlimento" => $rows['QueAlimento'],
            "FrecuenciaDesparacita" => $rows['FrecuenciaDesparacita'],
            "UltimaVezDesp" => $rows['UltimaVezDesp'],
            "ConsumeBeAlco" => $rows['ConsumeBeAlco'],
            "ConsumeTabaco" => $rows['ConsumeTabaco']
            
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};

function ActualizarPaciente333(){
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id; 
    $Intervencion = $data->Intervencion; 
    $QueAlimento = $data->QueAlimento; 
    $FrecuenciaDesparacita = $data->FrecuenciaDesparacita; 
    $UltimaVezDesp = $data->UltimaVezDesp;
    $ConsumeBeAlco = $data->ConsumeBeAlco;
    $ConsumeTabaco = $data->ConsumeTabaco;
    
    
    $qry = "UPDATE i6ntervencionquirurgica SET Intervencion='".$Intervencion."', QueAlimento='".$QueAlimento."', FrecuenciaDesparacita='".$FrecuenciaDesparacita."', UltimaVezDesp='".$UltimaVezDesp."', ConsumeBeAlco='".$ConsumeBeAlco."', ConsumeTabaco='".$ConsumeTabaco."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => "Paciente Intervencion Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};

function EditarPaciente4(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM a7ctividades WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "Rango" => $rows['Rango'],
            "EjercicioPractica" => $rows['EjercicioPractica'],
            "Frecuencia" => $rows['Frecuencia'],
            "Tiempo" => $rows['Tiempo'],
            "HaceComenzoActividad" => $rows['HaceComenzoActividad'],
            "MotivoActividad" => $rows['MotivoActividad'],
            "SintomasActividad" => $rows['SintomasActividad'],
            "Aspecto" => $rows['Aspecto'],
            "VasosAgua" => $rows['VasosAgua'],
            "MareosActividad" => $rows['MareosActividad']
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};


function ActualizarPaciente4(){
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
    
    
    $qry = "UPDATE a7ctividades SET Rango='".$Rango."', EjercicioPractica='".$EjercicioPractica."', Frecuencia='".$Frecuencia."', Tiempo='".$Tiempo."', HaceComenzoActividad='".$HaceComenzoActividad."', MotivoActividad='".$MotivoActividad."', SintomasActividad='".$SintomasActividad."', Aspecto='".$Aspecto."', VasosAgua='".$VasosAgua."', MareosActividad='".$MareosActividad."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => " Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};

function EditarPaciente5(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM g8inecologicos WHERE id=".$index);
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            "id" => $rows['id'],
            "EmbarazoActual" => $rows['EmbarazoActual'],
            "HabitosAlimen" => $rows['HabitosAlimen'],
            "Planificacion" => $rows['Planificacion'],
            "Consistio" => $rows['Consistio'],
            "AcidoFolico" => $rows['AcidoFolico'],
            "Antojo" => $rows['Antojo'],
            "QueAlimentos" => $rows['QueAlimentos'],
            "NauseasVomitos" => $rows['NauseasVomitos'],
            "Mareos" => $rows['Mareos']
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};

function ActualizarPaciente5(){
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
    
    $qry = "UPDATE g8inecologicos SET EmbarazoActual='".$EmbarazoActual."', HabitosAlimen='".$HabitosAlimen."', Planificacion='".$Planificacion."', Consistio='".$Consistio."', AcidoFolico='".$AcidoFolico."', Antojo='".$Antojo."', QueAlimentos='".$QueAlimentos."', NauseasVomitos='".$NauseasVomitos."', Mareos='".$Mareos."' WHERE id='".$id."';";
    
    $qry_res = mysql_query($qry); 
    if ($qry_res) { 
        $arr = array('msg' => " Updated Successfully!!!", 'error' => ''); 
    $jsn = json_encode($arr); // print_r($jsn); 
    } 
    else { 
        $arr = array('msg' => "", 'error' => 'Error In Updating record'); 
            $jsn = json_encode($arr); // print_r($jsn); 
           }
    
};

function PDF(){
    $data = json_decode(file_get_contents("php://input"));
    $index = $data->Paciente_id;
    $qry = mysql_query("SELECT * FROM d1atospersonales, i2ndicadoresclinicos, a3lergias, i4ngestaparabajardepeso, a5ntecedentesfamiliares, i6ntervencionquirurgica, a7ctividades WHERE d1atospersonales.id='$index' AND i2ndicadoresclinicos.id='$index' AND a3lergias.id='$index' AND i4ngestaparabajardepeso.id='$index' AND a5ntecedentesfamiliares.id='$index' AND i6ntervencionquirurgica.id='$index' AND a7ctividades.id='$index'");
  
    $data = array();
    
    while($rows = mysql_fetch_array($qry)){
        $data[] = array(
            //Datos personales
            "id" => $rows['id'],
            "nombre" => $rows['nombre'],
            "edad" => $rows['edad'],
            "sexo" => $rows['sexo'],
            "fecha" => $rows['fecha'],
            "direccion" => $rows['direccion'],
            "telefono" => $rows['telefono'],
            "correo" => $rows['correo'],
            "motivo" => $rows['motivo'],
            //Indicadores clinicos
            "Diarrea" => $rows['Diarrea'],
            "Estrenimiento" => $rows['Estrenimiento'],
            "Gastritis" => $rows['Gastritis'],
            "Ulcera" => $rows['Ulcera'],
            "Nauseas" => $rows['Nauseas'],
            "Pirosis" => $rows['Pirosis'],
            "Colitis" => $rows['Colitis'],
            "Vomito" => $rows['Vomito'],
            "Otros" => $rows['Otros'],
            //Alergias
            "Alergico" => $rows['Alergico'],
            "MotivodelaAlergia" => $rows['MotivodelaAlergia'],
            "EnfermedadDiagnosticada" => $rows['EnfermedadDiagnosticada'],
            "AnteriorPadecimiento" => $rows['AnteriorPadecimiento'],
            //Ingesta de medicamento
            "Laxantes" => $rows['Laxantes'],
            "MotivoLaxante" => $rows['MotivoLaxante'],
            "Diureticos" => $rows['Diureticos'],
            "MotivoDiureticos" => $rows['MotivoDiureticos'],
            "Antiacidos" => $rows['Antiacidos'],
            "MotivoAntiacido" => $rows['MotivoAntiacido'],
            "Analgesicos" => $rows['Analgesicos'],
            "MotivoAnalgesico" => $rows['MotivoAnalgesico'],
            //Antecedentes familiares
            "Obesidad" => $rows['Obesidad'],
            "Diabetes" => $rows['Diabetes'],
            "Cancer" => $rows['Cancer'],
            "HTA" => $rows['HTA'],
            "Hipercolesterolemia" => $rows['Hipercolesterolemia'],
            "Hipertrigliceridemia" => $rows['Hipertrigliceridemia'],
            //intervencion
            "Intervencion" => $rows['Intervencion'],
            "QueAlimento" => $rows['QueAlimento'],
            "FrecuenciaDesparacita" => $rows['FrecuenciaDesparacita'],
            "UltimaVezDesp" => $rows['UltimaVezDesp'],
            "ConsumeBeAlco" => $rows['ConsumeBeAlco'],
            "ConsumeTabaco" => $rows['ConsumeTabaco'],
            "Rango" => $rows['Rango'],
            "EjercicioPractica" => $rows['EjercicioPractica'],
            "Frecuencia" => $rows['Frecuencia'],
            "Tiempo" => $rows['Tiempo'],
            "HaceComenzoActividad" => $rows['HaceComenzoActividad'],
            "MotivoActividad" => $rows['MotivoActividad'],
            "SintomasActividad" => $rows['SintomasActividad'],
            "Aspecto" => $rows['Aspecto'],
            "VasosAgua" => $rows['VasosAgua'],
            "MareosActividad" => $rows['MareosActividad']
            
        );   
    }
    print_r(json_encode($data));
    return json_encode($data);
};

?>