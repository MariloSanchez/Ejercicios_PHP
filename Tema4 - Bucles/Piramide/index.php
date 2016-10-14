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
            img {
                height: 80px;
                width: 80px;
            }
            .miniatura {
                height: 50px;
                width: 50px;
            }
        </style>
    </head>
    <body>
        <h1>Ejercicio 19</h1>
        <p>Realiza un programa que pinte una pirámide por pantalla. La altura se 
           debe pedir por teclado mediante un formulario. La pirámide estará 
           hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se 
           deben dar a elegir mediante un formulario.</p>
        <form action="index.php" method="get">
            Altura del triángulo:
            <input type="number" name="altura">
            Digimon:
            <radio name="digimon">
                <input type="radio" name="digimon" value="Gatomon" checked>
                <img src="img/Gatomon.png" class="miniatura">
                <input type="radio" name="digimon" value="Patamon">
                <img src="img/Patamon.png" class="miniatura">
                <input type="radio" name="digimon" value="Piyomon">
                <img src="img/Piyomon.png" class="miniatura">
                <input type="radio" name="digimon" value="Palmon">
                <img src="img/Palmon.png" class="miniatura">
                <input type="radio" name="digimon" value="Agumon">
                <img src="img/Agumon.png" class="miniatura">
                <input type="radio" name="digimon" value="Gabumon">
                <img src="img/Gabumon.png" class="miniatura">
                <input type="radio" name="digimon" value="Gomamon">
                <img src="img/Gomamon.png" class="miniatura">
                <input type="radio" name="digimon" value="Tentomon">
                <img src="img/Tentomon.png" class="miniatura">
            </radio>
            <input type="submit" value="Generar">
            <br><br><br>
        </form>
        <?php
            $altura = $_GET['altura'];
            $digimon = $_GET['digimon'];
            
            for($i = 0; $i < $altura; $i++) {
                for($j = 0; $j < $altura - ($i + 1); $j++) {
                    echo "<img src=\"img/blanco.png\">";
                }
                for($j = 0; $j < $i * 2 + 1; $j++) {
                    echo "<img src=\"img/$digimon.png\">";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>
