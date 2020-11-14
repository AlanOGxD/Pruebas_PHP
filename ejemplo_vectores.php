<html>
    <body>

        <h1>====== Vectores (Arrays) ======</h1>
        <?php
            $vector_calif = array();
            var_dump($vector_calif);

            echo "<hr>";
            $vector_calif = array(100, 90, 80, 50, "70");
            var_dump($vector_calif);

            echo "<hr>";
            $vector_calif[4] = 75;
            var_dump($vector_calif);
            echo "<br>".$vector_calif;
            echo "<br>".$vector_calif[3];

            echo "<hr>";

            for($i=0; $i<sizeof($vector_calif); $i++){
                echo "<br>".$vector_calif[$i];
            }
           
            echo "<hr>";
            foreach ($vector_calif as $c) {
                echo "<br>".$c;
            }
        ?>
        
        <h3>========== Vectores (Arrays) ASOCIATIVOS =========</h3>

        <?php
            $vector_prom['Ana'] = 98;
            $vector_prom['Luis'] = 50;
            $vector_prom['Juan'] = 75;
            $vector_prom['Maria'] = 20;
            $vector_prom['Mando'] = 100;

            echo "<hr>";
            var_dump($vector_prom);

            echo "<hr>";
            foreach($vector_prom as $calif){
                echo $calif."<br>";
            }

            echo "<hr>";
            foreach ($vector_prom as $nombre => $calif) {
                echo $nombre." : ".$calif."<br>";
            }

            $vector_edades = array("Luke" => 60, "Leia"=>55 , "Han"=> 60);

            $vector_promedios_semestre = array(

                "Luke Skywalker" => array(78, 54, 89, 40),
                "Leia Organa" => array(78, 54, 89, 40),
                "Han Solo" => array(78, 54, 89, 40),
                "Anakin Skywalker" => array(78, 54, 89, 40),
                "Darth Vader" => array(78, 54, 89, 40),

            );

            echo "<hr>";
            var_dump($vector_promedios_semestre);

            echo "<hr>";
            echo $vector_promedios_semestre['Han Solo'][3];

            echo "<hr>";
            foreach ($vector_promedios_semestre as $key => $value) {
                echo "<hr>";
                echo "Alumno: ".$key . "<br>";
                foreach ($value as $c) {
                    echo "<br>".$c;
                }
                echo "<br>";
            }
        ?>

    </body>
</html>