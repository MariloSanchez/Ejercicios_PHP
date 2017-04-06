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
            body{
                text-align: center;
                /*font-size: 50px;*/
            }
        </style>
    </head>
    <body>
        <?php
            $numero = $_GET['numero'];
            $numeros = $_GET['numeros'];
            $totalNumeros = $_GET['total'];
            
            if (!isset($numero)) {
                $totalNumeros = -1;//para que el campo ++numeros sea 0
                $numeroTexto = "";
            }
            
            if ($numero < 0) {
                $numeros = substr($numeros, 2);
                
                $numero = explode("-", $numeros);
                $arrayFinal = new SplFixedArray(count($numero));
                
                foreach ($numero as $numeros) {
                    
                    for ($i = 0; $i < count($numeros); $i++) {
                        
                        if (($numeros % 2 == 0) && ($numeros % 5 == 0) ) {
                            $arrayFinal = $numeros;
                            echo "<span style=\"color: blue\"> $arrayFinal</span>";
                        }else if ($numeros % 5 == 0){
                            $arrayFinal = $numeros;
                            echo "<span style=\"color: red\"> $arrayFinal</span>";
                        }else if( $numeros % 2 == 0 ){
                            $arrayFinal = $numeros;
                            echo "<span style=\"color: green\"> $arrayFinal</span>";
                            
                        } else {
                            $arrayFinal = $numeros;
                            echo " $arrayFinal ";
                        }
                    }
                }
               
            } else {
            
        ?>
        <form action="#" method="get">
            Introduzca un número: <input type="number" name="numero" autofocus>
            <input  placeholder="numeros . . numero" name="numeros" value="<?= $numeros . "-" . $numero ?>">
            <input placeholder="totalnumeros" name="total" value="<?= ++$totalNumeros ?>">
            <input type="submit" value="Introducir">
        </form>
        <?php
            }
        ?>
    </body>
</html>
