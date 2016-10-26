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
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <?php
            //Genero el array
            for($i = 0; $i < 20; $i++){
                $numero[$i] = rand (0, 100);
            }
            echo 'Array original<br><br> <table><tr class="negrita">';
            //indice
             for($i = 1; $i <= 20; $i++){
                 echo "<td>$i</td>";
             }
             echo "</tr><tr>";
            //Muestro el array
            for($i = 0; $i < 20; $i++){
                echo "<td>$numero[$i]</td>";
            }
            echo "</tr></table>";
            
            //Guardo los impares y pares en arrays diferentes
            $cuentaPares = 0;
            $cuenteImpares= 0;
            
            for($i = 0; $i < 20; $i++){
                if ($numero[$i] % 2 == 0){
                    $pares[$cuentaPares] = $numero[$i];
                    $cuentaPares++;
                }else{
                    $impares[$cuentaImpares] = $numero[$i];
                    $cuentaImpares++;
                }
            }
            
            //Guardo los datos del array en el original poniendo los pares
            //al principio y los impares al final            
            for ($i = 0; $i < $cuentaPares; $i++) {
                $numero[$i] = $pares[$i];
            }

            for ($i = $cuentaPares; $i < $cuentaPares + $cuentaImpares; $i++) {
                $numero[$i] = $impares[$i - $cuentaPares];
            }
            
            //Mostrar array resultante
            
            //Indice
            echo 'Array Resultante<br> <table><tr class="negrita">';
            for ($i = 1; $i < 21; $i++) {
                echo "<td>$i</td>";
            }
            echo "</tr>";
            
            //Muestro el array
            for ($i = 0; $i < 20; $i++) {
                echo "<td>".$numero[$i]."</td>";
            }
            echo "</tr></table>";
            
        ?>
    </body>
</html>
