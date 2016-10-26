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
            if (!isset ($_GET['n'])){
                $contadorNumeros = 1;
                $numeroTexto = $_GET['numeroTexto'];
            }
            
            if ($numeroTexto < 11){
                $contadorNumeros = $_GET ['contadorNumeros'];
                $n = $_GET['n'];
                $numeroTexto = $_GET['numeroTexto'];
                
                if ($numeroTexto == ""){
                    $numeroTexto = $n;
                }else{
                    $numeroTexto = $numeroTexto.' '.$n;
                }
                $contadorNumeros++;
            }
            
            if(!isset($_GET['n']) || ($contadorNumeros < 11)){
        ?>
        
        <form action="ejercicio8.php" method="get">
            Introduzca un número:
            <input type="number" name="n" autofocus>
            <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
            <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
            <input type="submit" value="OK">           
        </form>
        
        <?php
            } //llave del ultimo if
            
            //////PROGRAMA PRINCIPAL//////El array con los numero es $numero
            
            if ($contadorNumeros == 11){
                $numero = explode (" ", $numeroTexto);
                
                //Muestra el array original
                // Índice
                echo "Array original:<br>";
                echo "<table><tr>";
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$i</td>";
                }
                echo "</tr>";
                //Contenido
                for($i = 0; $i < 10; $i++){
                    echo "<td".$numero[$i]."</td>";
                }
                echo "</tr></table>";
                
                //Guarda los primos y los no primos en arrays diferentes
                $cuentaPrimos = 0;
                $cuentaNoPrimos = 0;
                
                for($i = 0; $i < 10; $i++){
                    $esPrimo = true;
                    
                    for ($j = 2; $j < $numero[$i]; $j++){
                        if (($numero[$i] % $j) == 0){
                            $esPrimo = false;
                        }
                    }
                    if($esPrimo) {
                        $primos[$cuentaPrimos] = $numero[$i];
                        $cuentaPrimos++;
                    } else {
                      $noPrimos[$cuentaNoPrimos] = $numero[$i];
                      $cuentaNoPrimos++;
                    }
                }
                
                // Guarda los datos en el array original
                for ($i = 0; $i < $cuentaPrimos; $i++) {
                    $numero[$i] = $primos[$i];
                }

                for ($i = $cuentaPrimos; $i < $cuentaPrimos + $cuentaNoPrimos; $i++) {
                    $numero[$i] = $noPrimos[$i - $cuentaPrimos];
                }
                
                //Muestro el array
                // Índice
                echo "<br>Array resultante con los primos al principio y los no primos al final:<br>";
                echo "<table><tr>";
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$i</td>";
                }
                echo "</tr>";

                // Contenido
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>".$numero[$i]."</td>";
                }
                echo "</tr></table>";
            }
        ?>
        
    </body>
</html>
