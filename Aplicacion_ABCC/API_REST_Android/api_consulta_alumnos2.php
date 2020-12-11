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

                $dato = $datos['n'];                

                //$sql = "SELECT * FROM alumnos where num_control like %'$dato'% OR nombre like %'$dato'% OR primer_ap like %'$dato'%";
               
                $sql = "SELECT * FROM alumnos where num_control like '%$dato%' OR nombre like '%$dato%' OR primer_ap like '%$dato%'";
                $res = mysqli_query($conexion, $sql);
               
                $datos['alumnos'] = array();
                if($res){
                    //todo bien

                    while($fila = mysqli_fetch_assoc($res)){
                        $alumno = array();

                        $alumno['nc'] = $fila['num_control'];
                        $alumno['n'] = $fila['nombre'];
                        $alumno['pa'] = $fila['primer_ap'];
                        $alumno['sa'] = $fila['segundo_ap'];
                        $alumno['e'] = $fila['edad'];
                        $alumno['s'] = $fila['semestre'];
                        $alumno['c'] = $fila['carrera'];

                        array_push($datos['alumnos'], $alumno);
                    }

                    echo json_encode($datos);
                }
                else{
                    //todo mal
                    $respuesta['exito'] = false;
                    $respuesta['mensaje'] = "ERROR en la insercion";
                    $cad = json_encode($respuesta);
                    //var_dump($cad);
                    echo $cad;
                }
        }

       

    }else
        echo "No hay peticion HTTP";
    

?>