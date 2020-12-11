<?php

    include('../sitio/scripts_php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);
    
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $cadena_JSON = file_get_contents('php://input'); //Preparar PHP para recibir informacion a traves de HTTP
        if($cadena_JSON == false){
            echo "No hay cadena JSON";
        }else{
        $datos = json_decode($cadena_JSON, true);
        
                $nc = $datos['nc'];
                $nom = $datos['n'];
                $priap = $datos['pa'];
                $segap = $datos['sa'];
                $edad = $datos['e'];
                $sem = $datos['s'];
                $carr = $datos['c'];

               $sql = "UPDATE alumnos SET nombre='$nom', primer_ap='$priap', segundo_ap='$segap', edad= '$edad', semestre='$sem', carrera='$carr' WHERE num_control='$nc'";// SET SQL_SAFE_UPDATES = 0
                //echo $sql;
                $res = mysqli_query($conexion,$sql);
                
                $respuesta = array();
                if($res){
                    //todo bien
                    $respuesta['exito'] = true;
                    $respuesta['mensaje'] = "Modificacion correcta";
                    $cad = json_encode($respuesta);
                    //var_dump($cad);
                    echo $cad;
                }else{
                    //todo mal
                    $respuesta['exito'] = false;
                    $respuesta['mensaje'] = "Modificacion INCORRECTA";
                    $cad = json_encode($respuesta);
                    //var_dump($cad);
                    echo $cad;
                }
        }

       

    }else
        echo "No hay peticion HTTP";
    

?>