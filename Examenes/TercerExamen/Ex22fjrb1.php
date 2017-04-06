<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ejercicio 1
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //primero vamos a crear el array y le añadiremos los números
            for ($i = 0; $i < 4; $i++) {
                for ($x = 0; $x < 7; $x++) {
                    $array[$i][$x] = rand(10, 99);
                }
            }
            
            //ya tenemos creado el array con sus respectivos números dentro, ahora vamos a recorrer el array
            //para saber los maximos y mínimos
            
            //empezaremos buscando los mínimos de cada fila
            for ($i = 0; $i < 4; $i++){
                $min = 100;
                for ($x = 0; $x < 7; $x++) {
                    if ($array[$i][$x] < $min) {
                        $arrayMin[$i] = $array[$i][$x];
                        $min = $array[$i][$x];
                    } else {
                        //no ocurre nada, continúa con el array
                    }
                }
            }
            
            //ahora que ya tenemos los mínimos vamos a ver los máximos
            for ($i = 0; $i < 7; $i++){
                $max = -1;
                for ($x = 0; $x < 4; $x++) {
                    if ($array[$x][$i] > $max) {
                        $arrayMax[$i] = $array[$x][$i];
                        $max = $array[$x][$i];
                    } else {
                        //no ocurre nada, continúa con el array
                    }
                }
            }
            
            //ya tenemos todo los que necesitamos, ya sólo queda pintar todo y poner colores
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
                //cuando cambie al siguiente número del primer array, queremos mostrar el mínimo a la derecha
                //y además hacerle un salto de línea
                
                echo "| $arrayMin[$i]<br>";
            }
            //una vez ya está todo pintado solo queda poner los máximos
            echo "----------------------------------<br>";
            for ($i = 0; $i < 7; $i++) {
                echo $arrayMax[$i]." ";
            }
        ?>
    </body>
</html>
