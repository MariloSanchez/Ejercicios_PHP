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
        <div id="content">
        Este programa calcula la media de los números positivos introducidos.<br>
        Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
        <?php
          $n = $_POST['n'];
          $total = $_POST['total'];
          $cuentaNumeros = $_POST['cuentaNumeros'];
          if (!isset($n) || ($n > 0)) {
            $total += $n;
            $cuentaNumeros++;
            ?>
            <form action="index.php" method="post">
              <input type="number" name="n" autofocus>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="submit" value="Aceptar">
            </form>   
          <?php
          } else {
          ?>
            <br><br>La media de los números introducidos es <?php echo $total / ($cuentaNumeros - 1); ?>
            <br><br>
            <a href="index.php">>> Volver</a>
          <?php
          }
        ?>

      </div>
    </body>
</html>
