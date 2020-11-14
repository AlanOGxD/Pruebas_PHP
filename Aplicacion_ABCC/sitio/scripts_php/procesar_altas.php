<?php

    include('alumnoDAO.php');

    //validacion de datos

    $nc = $_POST['caja_num_control'];
    $n = $_POST['caja_nombre'];
    $pa = $_POST['caja_primer_ap'];
    $sa = $_POST['caja_segundo_ap'];
    $e = $_POST['caja_edad'];
    $s = 5; //select_semestre
    $c = $_POST['caja_carrera'];

    $aDAO = new AlumnoDAO();

    $aDAO->agregarAlumno($nc, $n, $pa, $sa ,$e, $s, $c);
?>