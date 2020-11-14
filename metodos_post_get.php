<html>
    <head>
        <title>Formularios GET-POST</title>
    </head>
    <body>
        <h3> Envio a traves de POST </h3>
        <form  method="POST" action="procesar_formulario_2.php" >

            <label>Usuario:</label>
            <input type="text" name="caja_usuario">
            <br>
            <label>Contraseña: </label>
            <input type="password" name="caja_contraseña" >
            <br>
            <input type="submit">

        </form>


        <h3> Envio a traves de GET </h3>
        <form  method="GET" action="procesar_formulario_2.php" >

            <label>Usuario:</label>
            <input type="password" name="caja_usuario_2">
            <br>
            <label>Contraseña: </label>
            <input type="password" name="caja_contraseña_2" >
            <br>
            <input type="submit">

        </form>

    </body>
</html>