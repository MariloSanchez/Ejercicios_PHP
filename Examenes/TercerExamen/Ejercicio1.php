<head>
    <style>
        div{
            text-align: center;
        }
    </style>
</head>
<?php

//Genera un array con numeros aleatorios entre 10 y 99   
for($i = 0; $i < 4; $i++){
    for($j = 0; $j < 7; $j++){
        $array[$i][$j] = rand(10,99);
    }
}

//BUSCO MINIMO Y MAXIMO
for($i = 0; $i < 4; $i++){ //filas
    $minimo = 999;
    for ($j = 0; $j < 7; $j++){//columna
        $maximo = 0;
        if ($array[$i][$j] < $minimo){
            $minimoFila[$i] = $array[$i][$j];
            $minimo = $array[$i][$j];
        }
        if ($array[$i][$j] > $maximo){
            $maximoColumna[$j] = $array[$i][$j];
            $maximo = $array[$i][$j];
        }
    }
}

//PINTO EL ARRAY CON LOS MAXIMOS Y LOS MINIMOS
echo "<div>";
for($i = 0; $i < 4; $i++){ //filas
    for ($j = 0; $j < 7; $j++){//columna
        if($array[$i][$j] == $minimoFila[$i]){
            echo "<span style =\"color: blue\">".$array[$i][$j].' </span>';
        }else if($array[$i][$j] == $maximoColumna[$j]){
            echo "<span style =\"color: red\">".$array[$i][$j].' </span>';
        }else{
            echo '<span>'.$array[$i][$j].' </span>'; 
        }
    }

    echo "|".$minimoFila[$i];
    echo "<br> ";
}

echo "<span>--------------------------------</span><br>";
for ($i = 0; $i < 7; $i++){
    echo $maximoColumna[$i].' ';
}
echo "</div>";