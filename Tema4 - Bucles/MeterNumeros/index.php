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
             $numero = $_GET['numero'];
            $cantidadDeNumeros = $_GET['cantidadDeNumero'];
            $cantidadDeImpares = $_GET['cantidadDeImpares'];
            $totalImpares = $_GET['totalImpares'];
            $mayorPar = $_GET['mayorPar'];
        ?>
        <?php
            if (isset($numero)) {
                
                if ($numero > 0) {
                    $cantidadDeNumeros++;
               
                    if ($numero % 2 == 0) {
                        if ($numero > $mayorPar) {
                            $mayorPar = $numero;
                        }
                    } else {
                        $cantidadDeImpares++;
                        $totalImpares += $numero;
                    }
                    
                } else {
                    echo "Cantidad de números introducidos: $cantidadDeNumeros";
                    echo "<br>Media de número impares: " . $totalImpares/$cantidadDeImpares;
                    echo "<br>Número par mayor: $mayorPar";
                }
            }
        ?>
        <form action="index.php" method="get">
            Introduzca un número:
            <input type="number" name="numero">
            <input type="hidden" name="cantidadDeNumero" value=<?=$cantidadDeNumeros ?>>
            <input type="hidden" name="cantidadDeImpares" value=<?=$cantidadDeImpares ?>>
            <input type="hidden" name="totalImpares" value=<?=$totalImpares ?>>
            <input type="hidden" name="mayorPar" value=<?=$mayorPar ?>>
            <input type="submit" value="Introducir">
        </form>
    </body>
</html>
