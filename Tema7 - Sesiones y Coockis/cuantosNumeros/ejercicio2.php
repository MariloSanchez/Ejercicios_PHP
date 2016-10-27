<?php
  session_start(); // Inicio de sesión
  
  $n = $_POST['n'];
  
  if (!isset($n)) {
    $_SESSION['cuentaNumeros'] = 0;
    $_SESSION['sumaImpares'] = 0;
    $_SESSION['cuentaImpares'] = 0;
  }
  
  if (!isset($n) || ($n > 0)) {
  ?>
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
        <form action="ejercicio2.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            }

            if (isset($n)) {
              if ($n >= 0) {
                $_SESSION['cuentaNumeros']++;

                if (($n % 2) == 0) { // Par
                  if ($n > $_SESSION['mayorPar']) {
                    $_SESSION['mayorPar'] = $n;
                  }
                } else { // Impar
                  $_SESSION['sumaImpares'] += $n;
                  $_SESSION['cuentaImpares']++;
                }
              } else {
                echo "<br><br>Ha introducido " . $_SESSION['cuentaNumeros'] . " números.<br>";
                echo "La media de los impares es " . $_SESSION['sumaImpares'] / $_SESSION['cuentaImpares'] . "<br>";
                echo "El mayor de los pares es " . $_SESSION['mayorPar'] . "<br>";
                session_destroy();             
              }
            }
        ?>
    </body>
</html>
