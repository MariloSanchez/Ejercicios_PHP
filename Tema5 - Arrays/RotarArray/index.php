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
            $numIntro = $_GET['numIntro'];
            $contadorNumeros = $_GET['contadorNumeros'];
            $numeroTexto = $_GET['numeroTexto'];
            
            if (!isset($numIntro)) { //comprueba si esta definida la variable y no es null
                $contadorNumeros = 0;
                $numeroTexto = "";
            }
            
            //Programa principal una vez recogidos los datos del array.
            //  El array con los números es $numero
            
            if ($contadorNumeros == 15) {
                $numeroTexto = $numeroTexto . " " . $numIntro; // añade el último número leído
                $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
                
                $numero = explode(" ", $numeroTexto); // Divide el string en varios string
                
                // Muestra el array original
                echo "Array original:<br>";
                
                echo "<table><tr>";
                echo "<td>INDICE:</td>";
                for ($i = 0; $i < 15; $i++) {
                    echo "<td>$i</td>";
                }
                
                echo "</tr>";
                echo "<td>ARRAY:</td>";
                for ($i = 0; $i < 15; $i++) {
                    echo "<td>".$numero[$i]."</td>";
                }
                
                echo "</tr></table>";
                
                // Rota los elementos del array hacia la derecha
                $aux = $numero[14];
                
                for ($i = 14; $i > 0; $i--) {
                   $numero[$i] = $numero[$i - 1];
                }
                
                $numero[0] = $aux;
    
                // Muestra el array rotado
                echo "<br>Array rotado:<br>";
                echo "<table><tr>";
                echo "<td>INDICE:</td>";
                for ($i = 0; $i < 15; $i++) {
                   echo "<td>$i</td>";
                }
                
                echo "</tr>";
                echo "<td>ARRAY:</td>";
                for ($i = 0; $i < 15; $i++) {
                  echo "<td>".$numero[$i]."</td>";
                }
                
                echo "</tr></table>"; 
            }
             
            // Pide número y añade el actual a la cadena
            if (($contadorNumeros < 15) || (!isset($numIntro))) {
            
        ?>
        
        <form action="index.php" method="get">
            <input type="hidden" name="ejercicio" value="3">
            Introduzca un número:
            <input type="number" name="numIntro" autofocus>
            <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
            <input type="hidden" name="numeroTexto" value= "<?= $numeroTexto . " " . $numIntro ?>">
            <input type="submit" value="Enviar número">
        </form>
        
        <?php
            }//ultimo if
        ?>
    </body>
</html>
