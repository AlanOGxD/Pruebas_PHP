<?php
include('../sitio/scripts_php/conexion_bd_usuarios.php');


$con = new ConexionBD();
$conexion = $con->getConexion();

    if($_SERVER['REQUEST_METHOD'] =='POST'){
$cadena_JSON = file_get_contents('php://input');
if($cadena_JSON == false){
    echo "No hay cadena JSON";
}else{
        $filtro = json_decode($cadena_JSON, true);
        
        $correo = $filtro['Correo'];
        $contraseña = $filtro['Pass'];


$correo=sha1($correo);
$contraseña=sha1($contraseña);




$sql = "SELECT * FROM usuarios WHERE usuario='$correo' AND password1='$contraseña'";// SET SQL_SAFE_UPDATES = 0
//echo $sql;
$res = mysqli_query($conexion,$sql);

$datos['usuarios'] = array();
                if($res==true){
                    //todo bien
                    
                    if($fila = mysqli_fetch_assoc($res)){
                        
                        $usuario = array();

                        $usuario['Correo'] = $fila['usuario'];
                        $usuario['Pass'] = $fila['password1'];
                        

                        array_push($datos['usuarios'], $usuario);
                        $cad =  json_encode($datos);                    
                        echo $cad;
                    }

                    
                }else{
    echo "Nooo jala";
    $respuesta['exito'] = false;
    $respuesta['mensaje'] = "Modificacion incorrecta";
    $cad = json_encode($respuesta);
    //var_dump($cad);
    echo $cad;
}

}
}else
echo "No hay peticion HTTP";

?>