<?php
/* 
 * Para que funcione la url debe de ser :
 * localhost/ServiciosWeb/ejercicio4/index.php?cantidad=4.
 * 
 * Porque tengo el ejercicio guardado en xamp y necesito porne la URL para
 * que funcione
 */
$palos = ['Espadas', 'Basto', 'Oro', 'Copa'];
$numeros = ['As','2','3','4','5','6','7','8','9','Sota','Caballo','Rey'];
$numeroDeCartas = $_GET['cantidad'];
$baraja = [];

//En total hay 48 cartas
if(($numeroDeCartas <= 48)&&($numeroDeCartas > 0)){//Si es menor o = a 48 y mayor a 0
    while($numeroDeCartas > 0){
        $paloSeleccionado = $palos[rand(0,3)];
        $numeroSeleccionado = $numeros[rand(0,11)];
        $carta = [
          'numero' => $numeroSeleccionado,
          'palo' => $paloSeleccionado
        ];
        if(!in_array($carta, $baraja)){
            $baraja[] = $carta;
            $numeroDeCartas--;
        }
    }
    echo json_encode($baraja) ;
} else {
    echo "Cantidad de cartas incorrecta.";
}