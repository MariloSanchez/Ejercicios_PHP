<head>
    <style>
        table{
            margin: 0 auto;
        }
        span{
            margin-left: 43%;
        }
        #tablados{
            margin-left: 44%;
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
     
//Hago el minidoFila y MaximoColumna y lo muestro

echo "<table>";
for ($i = 0; $i < 7; $i++){
    $maximoColumna[$i] = 0;
}
for($i = 0; $i < 4; $i++){ //filas
    echo "<tr>";
    $minimoFila = 999;
    for ($j = 0; $j < 7; $j++){//columnas
        /*if($array[$i][$j] == $minimoFila){
            echo "<td style =\"color: blue\">".$array[$i][$j].'</td>';
        }else if($array[$i][$j] == $maximoColumna[$i]){
            echo "<td style =\"color: red\">".$array[$i][$j].'</td>';
        }else{
            echo '<td>'.$array[$i][$j].'</td>'; 
        }*/

        if ($array[$i][$j] < $minimoFila){
            $minimoFila = $array[$i][$j];
        }
        if ($array[$i][$j] > $maximoColumna[$j]){
            $maximoColumna[$j] = $array[$i][$j];
        }
        
        if($array[$i][$j] == $minimoFila){
            echo "<td style =\"color: blue\">".$array[$i][$j].'</td>';
        }else if($array[$i][$j] == $maximoColumna[$j]){
            echo "<td style =\"color: red\">".$array[$i][$j].'</td>';
        }else{
            echo '<td>'.$array[$i][$j].'</td>'; 
        }
    }
    echo '<td>|'.$minimoFila.'</td>';
    echo "<br> ";
}
echo "</tr></table>";
echo "<span>-----------------------------------</span>";
echo "<br>";
echo "<table id=\"tablados\"><tr>";
for ($i = 0; $i < 7; $i++){
    echo '<td>'.$maximoColumna[$i].'</td>';
}
echo "</tr>";
echo "</table>";

