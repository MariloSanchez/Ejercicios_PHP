<?php
    session_start(); // Inicio de sesión
    
    $n = $_POST['n'];

    if (!isset($n) || ($n > 0)) {
        $_SESSION['total'] += $n;
        $_SESSION['cuentaNumeros']++;
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
        <form action="ejercicio1.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            } else {
        ?>
        
        <p>
            La media de los números introducidos es <?php echo $_SESSION['total'] / ($_SESSION['cuentaNumeros'] - 1); ?>
        </p>
        
        <?php
            session_destroy();
            }
        ?>
    </body>
</html>
