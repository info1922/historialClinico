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

    switch ($_GET['action']){
        case 'AddPaciente':
            AddPaciente();
            break;
        // case 'getDP':
        //     getDP();
        //     break;
    }
    
    function AddPaciente(){
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

        $qry = 'INSERT INTO d1atospersonales (id, nombre, edad, sexo, fecha, direccion, telefono, correo, motivo) VALUES ("'.$id.'","'.$nombre.'", "'.$edad.'", "'.$sexo.'", "'.$fecha.'", "'.$direccion.'", "'.$telefono.'", "'.$correo.'", "'.$motivo.'" )';

        $qry_res = mysql_query($qry);
        if ($qry_res) {
            $arr = array('msg' => "Success!!", 'error' =>'');
            $jsn = json_encode($arr);
            
            //printf("El ultimo id es : ",mysql_insert_id());
            # code...
        }else{
            $arr = array('msg' => "", 'error' => 'Error al insertar datos');
            $jsn = json_encode($arr);
        }

       
       
    };

//     function getDP(){
//     $qry = mysql_query('SELECT * from d1atospersonales');
//     $data= array();
    
//     while ($rows = mysql_fetch_array($qry)){
    
//         $data[] = array(
//             "id" => $rows['id'],
//             "nombre" => $rows['nombre_cliente'],
//             "edad" => $rows['edad'],
//             "sexo" => $rows['sexo'],
//             "fecha" => $rows['fecha'],
//             "direccion" => $rows['direccion'],
//             "telefono" => $rows['telefono'],
//             "correo" => $rows['correo'],
//             "motivo" => $rows['motivo']

//         );
//     }
//     print_r(json_encode($data));
//     return json_encode($data);
// };

?>