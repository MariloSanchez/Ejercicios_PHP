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
                margin-top: 15%;
            }
        </style>
    </head>
    <body>
        <div>
            
            <h3>Introduzca un número y el programa le dira si es primo</h3>
            <form action="index.php" method="get">
                <input type="number" name="numIntro">
                <input type="submit" value="ACEPTAR">
            </form>
            
            <?php
                $numIntro = $_GET['numIntro'];
                $esPrimo = true;
                
                for ($i = 2; $i < $numIntro; $i++){
                    if ($numIntro % $i == 0){
                       $esPrimo = false ;
                    }
                }
                if($esPrimo){
                    echo "El número $numIntro es primo.";
                }else{
                    echo "El número $numIntro no es primo.";
                }
            ?>
        </div>
    </body>
</html>
