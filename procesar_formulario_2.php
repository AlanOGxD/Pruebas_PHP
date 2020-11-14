<?php

    echo "Magia magia con PHP (POST-GET)";

    if(isset($_POST['caja_usuario']) && isset($_POST['caja_contraseña']  )){
        $usuario = $_POST['caja_usuario'];
        $contraseña = $_POST['caja_contraseña'];
        if(!empty($usuario)){
            echo "<br>Valor de usuario: " . $usuario;
            echo "<br>Valor de usuario: " . $contraseña;
        }else
            echo "<br>Variables vacias";
    }else
        echo "<br>No existe componente";
    
    echo "<hr>";

    //Procesamiento de datos con GET

    $usuario2 = $_GET['caja_usuario_2'];
    $contraseña2 = $_GET['caja_contraseña_2'];

    echo "<br>Valor de usuario 2: " . $usuario2;
    echo "<br>Valor de usuario 2: " . $contraseña2;

    /*
        url?parametros
        url?nombre_componente=dato&nombre_componente=dato&....
        http://localhost:8888/Semestre_ago_dic_2020/pruebas_php/procesar_formulario_2.php?caja_usuario_2=u&caja_contraseña_2=c
    */


?>