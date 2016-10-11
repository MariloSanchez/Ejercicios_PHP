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
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div>
            <?php
            $a = $_GET['a'];
             $b = $_GET['b'];
            if ($a == 0) {
                echo "Esa ecuación no tiene solución real.";
              } else {
                echo "x = ", (-$b / $a);
              }
            ?>
            <form action="index.php">
                <input type="submit" value="VOLVER">
            </form>
        </div>
    </body>
</html>
