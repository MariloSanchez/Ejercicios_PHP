<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        //primero creamos el array 
            for ($i = 0; $i < 4; $i++) {
                for ($x = 0; $x < 7; $x++) {
                    $array[$i][$x] = rand(10, 99);
                }
            }
            
            //buscamos los mínimos de cada fila
            for ($i = 0; $i < 4; $i++){
                $min = 100;
                for ($x = 0; $x < 7; $x++) {
                    if ($array[$i][$x] < $min) {
                        $arrayMin[$i] = $array[$i][$x];
                        $min = $array[$i][$x];
                    } 
                }
            }
            
            //buscamos los máximos de cada columna
            for ($i = 0; $i < 7; $i++){
                $max = -1;
                for ($x = 0; $x < 4; $x++) {
                    if ($array[$x][$i] > $max) {
                        $arrayMax[$i] = $array[$x][$i];
                        $max = $array[$x][$i];
                    } 
                }
            }
            //pintamos todo y ponemos los colores
            for ($i = 0; $i < 4; $i++){
                for ($x = 0; $x < 7; $x++) {
                    if ($array[$i][$x] == $arrayMin[$i]) {
                        echo "<span style =\"color: blue\">".$array[$i][$x]." </span>";
                    } else if ($array[$i][$x] == $arrayMax[$x]) {
                        echo "<span style =\"color: red\">".$array[$i][$x]." </span>";
                    } else {
                        echo $array[$i][$x]." ";
                    }
                }
                //mostramos el mínimo a la derecha
                echo "| $arrayMin[$i]<br>";
            }
            //y ponemos los máximos
            echo "----------------------------------<br>";
            for ($i = 0; $i < 7; $i++) {
                echo $arrayMax[$i] ." ";
            }
            
        ?>
    </body>
</html>
