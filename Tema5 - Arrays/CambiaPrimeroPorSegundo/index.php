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
            if (!isset($_GET['numeroTexto'])) { //si numeroTexno no es null
                
                //Generamos los numeros aleatorios
                echo "ARRAY ORIGINAL<br>";
                echo "<table><tr>";
                for ($i; $i < 101; $i++){
                   $numero[$i]= rand(0,20);
                   echo "<td>".$numero[$i]. "  </td>";
                }  
                echo "</tr></table>";
                
                $numeroTexto = implode(" ", $numero); //convierto el array en un string
        ?>
        
        <form action="index.php" method="get">
            Primer valor a sustituir: <input type="number" name ="viejo" autofocus="" required=""><br>
            Segundo valor nuevo: <input type="number" name ="nuevo" required="">
            <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
            <input type="submit" value="OK">
        </form>
        
        <?php
            }else{ //else del primer if
                $numeroTexto = $_GET['numeroTexto'];
                $viejo = $_GET['viejo'];
                $nuevo = $_GET['nuevo'];

                $numero = explode(" ", $numeroTexto); // convierto el string en un array

                foreach ($numero as $n) { //numero pasa a ser n
                    if ($n == $viejo) { 
                      echo "<span style=\"color: blue; font-weight: bold;\">$nuevo</span> "; //si n = viejo lo cambio por nuevo
                    } else {
                      echo  "$n ";
                    }
                }
            }
        ?>
    </body>
</html>
