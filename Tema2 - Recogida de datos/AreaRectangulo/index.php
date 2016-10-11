<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Area</title>
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <p id="a">a</p>
        <img src="img/rectangulo.png" alt="Rectangulo" height="100" width="200" >
        <p id="b">b</p>
            <br><br><br>
            <form action="calculado.php" method="get">
                Introduzca la altura:<input type="number" name="altura">
                <br><br>
                Introduzca la base:<input type="number" name="base">
                <br><br>
                <input id="boton" type="submit" value="Calcular">
            </form>
    </body>
</html>
