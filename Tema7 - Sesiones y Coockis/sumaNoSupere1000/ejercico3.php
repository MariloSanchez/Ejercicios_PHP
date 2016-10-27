<?php
  session_start(); // Inicio de sesión
  
  $n = $_POST['n'];

  if (!isset($n) || ($_SESSION['suma'] <= 10000)) {
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
        <form action="ejercico3.php" method="post">
            <input type="number" name="n" autofocus required="">
            <input type="submit" value="Aceptar">
        </form>
        <?php
  }
            if(isset($n)) {
                $_SESSION['cuentaNumeros']++;
                $_SESSION['suma'] += $n;
                
                if($_SESSION['suma'] > 10000){
                    echo "Ha introducido ".$_SESSION['cuentaNumeros']." numeros.<br>";
                    echo "La suma es ".$_SESSION['suma']."<br>";
                    echo "La media es ".$_SESSION['suma']/$_SESSION['cuentaNumeros'];
                }
            }
        ?>
    </body>
</html>
