
<?php

include('../scripts_php/conexion_bd.php');
$con = new ConexionBD();
$conexion = $con->getConexion();
$parametro=$_POST['parametro'];

$sql="SELECT * FROM alumnos WHERE num_control LIKE '%$parametro%' or nombre LIKE '%$parametro%' or primer_ap LIKE '%$parametro%' or segundo_ap LIKE '%$parametro%' or edad LIKE '%$parametro%' or semestre LIKE '%$parametro%' or carrera LIKE '%$parametro%'";

$resultado=mysqli_query($conexion,$sql);

//var_dump($resultado);
if(mysqli_num_rows($resultado)>0){
    //mysqli_fetch_row
    require_once('../vista/formulario_consultas.php');
    ?>
    <table id="customers">
      <tr> <th>Num. Control</th> 
           <th>Nombre</th> 
           <th>Primer Ap.</th> 
           <th>Segundo Ap.</th>
           <th>Edad</th> 
           <th>Semestre</th> 
           <th>Carrera</th> 
        </tr>
 
    <?php
    
    while($fila=mysqli_fetch_assoc($resultado)){
        printf("<tr> <td>".$fila['num_control']."</td>". 
                     "<td>".$fila['nombre']."</td>".
                     "<td>".$fila['primer_ap']."</td>".
                     "<td>".$fila['segundo_ap']."</td>".
                     "<td>".$fila['edad']."</td>".
                     "<td>".$fila['semestre']."</td>".
                     "<td>".$fila['carrera']."</td></tr>"     
        );
    }
}else{
    echo ('No hay datos');
}

?>