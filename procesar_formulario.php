
<?php

    echo "Magia magia con PHP";

    /*
        Variables
            - Tipos de datos dinamicos

            - Sintaxtis:  $identificador = valor;
    */

    $nombre = "Luke Skywalker";
    $edad = 50;
    $estatura = 1.80;

    $tieneEspadaLaser = true;

    //Concatenacion .
    echo "<br> <h1>Hola " . $nombre . ", tu edad es: " . $edad . "</h1>";

    echo "Potencia: " . pow($edad, 4);

    if($edad>=18){
        echo "<br>Puedes ir con Yoda para convertirte en Jedi";
    }

    for ($i=0; $i < 10; $i++) { 
        echo "<br><hr>".$i;
    }

?>