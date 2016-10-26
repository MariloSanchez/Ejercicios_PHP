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
            if (!isset($_GET['num'])) { //si num no es nulo
                $contadorNumeros = 1; 
                $numeroTexto = "";
            } else {
                $contadorNumeros = $_GET['contadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];
            }
            
            if ($contadorNumeros < 9) {  //si se meten 8 numeros
                $contadorNumeros = $_GET['contadorNumeros'];
                $num = $_GET['num'];
                $numeroTexto = $_GET['numeroTexto'];
                if ($numeroTexto == "") {
                    $numeroTexto = $num;
                } else {
                    $numeroTexto = $numeroTexto.' '.$num;
                }
                $contadorNumeros++;
            }
            
             if (!isset($_GET['num']) || ($contadorNumeros < 16)) {
        ?>
        
        <form action="index.php" method="get">
            Introduzca un número:
            <input type="number" name ="num" autofocus="" required="">
            <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
            <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
            <input type="submit" value="OK">
        </form>
        
        <?php
            }//del ultimo if
  
            //  Programa principal una vez recogidos los datos del array.
            //  El array con los números es $numero
  
           
            if ($contadorNumeros == 9) {
                $numero = explode(" ", $numeroTexto);
                foreach ($numero as $num) {
                if ($num % 2 == 0) {
                  echo "<span style=\"color: magenta;\">$num&nbsp;&nbsp;</span>";
                } else {
                  echo "<span style=\"color: blue;\">$num&nbsp;&nbsp;</span>";
                }
              }
              echo "<span style=\"color: magenta;\"><br>pares<br></span>";
              echo "<span style=\"color: blue;\">impares</span>";
            }
        ?>
    </body>
</html>
