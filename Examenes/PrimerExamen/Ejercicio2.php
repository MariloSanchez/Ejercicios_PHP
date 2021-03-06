<style>
    div{
        text-align: center;
        font-weight: bold;
    }
</style>
<?php

$palo = array ('oro', 'copa', 'basto', 'espada');

$figura = array ('As', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Ocho',
                'Nueve', 'Sota', 'Caballo', 'Rey');

$puntos = array ('As' => 11, 'Dos' => 0, 'Tres' => 10, 'Cuatro' => 0, 'Cinco' => 0,
                'Seis' => 0, 'Siete' => 0, 'Ocho' => 0, 'Nueve' => 0, 'Sota' => 2, 'Caballo' => 3, 'Rey' => 4);

$contadorDeCartas = 0;
$contador = 0;
$puntosTotales = 0;
$paloCarta2 = "";
$figuraCarta2 = "";
$cartasEchadas = "";

do{
    /* ME SACA EL PALO O LA FIGURA IGUAL */
    do{
        
        $paloCarta = $palo[rand (0, 3)];// aleatoria sale el palo
        $figuraCarta = $figura[rand (0, 11)];//saca figura aleatoria
        
    }while($paloCarta != $paloCarta2 && $figuraCarta != $figuraCarta2 && $contador != 0);
    
    $paloCarta2 = $paloCarta;
    $figuraCarta2 = $figuraCarta;
    $contador++;
    /* ********************************** */
    
    $puntosCartas = $puntos[$figuraCarta];//me saca los puntos segun la figura
    $carta = "$figuraCarta de $paloCarta"; //string con el nombre y palo de la carta
    
    /*Comprobamos que no se repitan las cartas*/
    if (!in_array($carta, $cartasEchadas)){//comprueba que la carta no se repita  
        $cartasEchadas[] = $carta; // la meto en un array en el q compruebo que no saco la misma carta
        echo "<div>$carta - $puntosCartas puntos<br></div>";//muestro la carta no repetida
        $puntosTotales += $puntosCartas; // suma puntos carta
        
        $contadorDeCartas++;//contador para que llegue a 5 cartas
    }
    /* ************************************** */
    
}while($contadorDeCartas < 5);

echo "<div>TOTAL: $puntosTotales</div>";