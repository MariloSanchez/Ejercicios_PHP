<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table, tr, td {
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }
        tr{
            height: 50px;
        }
        td{
           width: 3%; 
        }
    </style>
</head>
<body>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);//borra las noticias
        
        $numero = $_GET['numero'];
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];

        if (!isset($numero)) {
          $contadorNumeros = 0;
          $numeroTexto = "";
        }


        if ($numero < 0) {
            $contadorNumeros++;
            $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
                                                    // espacios de la cadena       
            $numero = explode(" ", $numeroTexto); //Añade a la array los números

            //ARRAY ORIGINAL
            echo "Array Original: " . "<br>";
            echo "<table><tr>";
            for($i = 1; $i <= count($numero); $i++){
                echo "<td><b>".$i." </b></td>";
            }
            echo "</tr><tr>";
            foreach ($numero as $n){
                echo "<td>$n </td>";
            }
            echo "</tr></table>";
            /* ****************************** */

            echo "<br><br><br>Array Resultante";
            //indice
            echo "<table><tr>";
            for($i = 1; $i <= count($numero); $i++){
                echo "<td><b>".$i." </b></td>";
            }
            echo "</tr><tr>";

            for ($i = 0; $i < count($numero); $i++){
              echo"<td>".$suma += $numero[$i] ."</td>";
            }
            echo "</tr></table>";
        }else{
    ?>
    <form action="#" method="get">
        Introduzca un número:
        <input type="number" name ="numero" autofocus>
        <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
        <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
        <input type="submit" value="Enviar">
    </form>
    <?php } ?>
</body>
</html>