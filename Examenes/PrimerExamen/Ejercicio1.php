<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
            table {
                margin-top: 40px;
            }
            tr, td {
                padding: 0px 30px;
            }
            tr {
                border-bottom: 1px solid black;
            }
        </style>  
</head>
<body>
    <?php
    $numero = $_GET['numero'];
    $numeros = $_GET['numeros'];
    $totalNumeros = $_GET['total'];
    
    if(!isset($numero)){ //si es nulo
        $totalNumeros = -1;
    }
    
    if($numero < 0){
        $numeros = substr ($numeros, 2); //cadena de string
        $contadorPrimo = 0;
        
        $numero = explode ("-", $numeros); //array de string
        $arrayFinal = new SplFixedArray (count($numero));//clase de array, solo permite enteros y de tamaño fijo
        $contadorNoPrimo = count($numero) - 1;
        
        echo "<table><caption>ARRAY INICIAL</caption><tr>";
        for ($i = 0; $i < count($numero); $i++){ //INDICE
            echo "<th>$i</th>";
        }
        echo "</tr><tr>";
        foreach ($numero as $n){//CONTENIDO
            echo "<td>$n</td>";
            
            $primosDeltante;
            $x = 0;
            
            foreach ($arrayFinal as $num){
                $divisores = 0;
                for($i = 1; $i <= $num; $i++){
                    if(($num%$i)==0){
                        $divisores++;
                    }
                }
                if($divisores <= 2){
                    $primosDeltante[$x] = $num;
                    $x++;
                }
            }
            
            /*do{
                if($n % $contador == 0 && $n != $contador){
                    $primo = false;
                }
                $contador++;
            }while ($primo && $contador < sqrt($n)); //raiz cuadrada
           
            if($primo){
                $arrayFinal[$contadorPrimo] = $n;
                $contadorPrimo++;
            }else{
                $arrayFinal[$contadorNoPrimo] = $n;
                $contadorNoPrimo--;
            }*/
        }
        echo "</tr></table>";
        
        echo "<table><caption>ARRAY FINAL</caption><tr>";
        
        for($i = 0; $i < count($arrayFinal); $i++){
            echo "<th>$i</th>";
        }
        echo "</tr><tr>";
        //LE DOY LA VUELTA AL ARRAY
        for($i = $totalNumeros - 1; $i >= 0; $i--){
            echo "<td>$primosDeltante[$i]</td>";
        }
        echo "</tr></table>";
    }else{
    ?>
    
    <form action="#" method="get">
        <h1>Si quieres salir debes introducir un numero negativo</h1><br>
        Introduzca un número:<input type="number" name="numero" autofocus>
        <input  placeholder="numeros . . numero" name="numeros" value="<?= $numeros . "-" . $numero ?>">
        <input placeholder="totalnumeros" name="total" value="<?= ++$totalNumeros ?>">
        <input type="submit" value="OK">
    </form>
    
    <?php
    }
    ?>
</body>
</html>