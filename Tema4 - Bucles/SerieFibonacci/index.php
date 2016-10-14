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
        <style>
            div{
                text-align: center;
                margin: 15%;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
              $n = $_POST['n'];

              if (!isset($n)) {
            ?>
                Este programa muestra los n primeros números de la serie de Fibonacci.<br>
                Por favor, introduzca n:<br>
                <form action="index.php" method="post">
                <input type="number" name="n" autofocus>
                <input type="submit" value="Aceptar">
                </form>
            <?php
              } else {
                $i = 1;
                $f1 = 0;
                $f2 = 1;
                switch ($n) {
                  case 1:
                    echo "0";
                    break;
                  case 2:
                    echo "0 1";
                    break;
                  default:
                    echo "0 1";
                    while($n > 2) {
                      $aux = $f1;
                      $f1 = $f2;
                      $f2 = $aux + $f2;
                      echo " $f2";
                      $n--;
                    }
                }
              }
            ?>
        </div>
    </body>
</html>
