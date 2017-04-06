<?php

$puntos = ["Dama" => 9, "Torre" => 5, "Alfil" => 3, "Caballo" => 2, "Peon" => 1];
$pieza = ["Dama", "Torre", "Alfil", "Caballo", "Peon"];
        
$enJuegoBlanco = ["Dama" => 1, "Torre" => 2, "Alfil" => 2, "Caballo" => 2, "Peon" => 8];
$enJuegoNegro = ["Dama" => 1, "Torre" => 2, "Alfil" => 2, "Caballo" => 2, "Peon" => 8];
        
$jugadorBlanco = 0;
$jugadorNegro = 0;
        
$turnos = 0;
$salir = false;
        
        do {
        
            if ($turnos % 2 == 0) {
                
                $sacada = $pieza[rand(0, 4)];
                
                if ($enJuegoBlanco[$sacada] > 0) {
                    
                    $jugadorBlanco += $puntos[$sacada];
                    $enJuegoBlanco[$sacada]--;
                    
                } else {
                   $turnos--;
                } 
                
                echo  $sacada, ' blanco + ', $puntos[$sacada], ' puntos<br>';
                $turnos++;
                
            } else {
                
                $sacada = $pieza[rand(0, 4)];
                
                if ($enJuegoNegro[$sacada] > 0) {
                    
                    $jugadorNegro += $puntos[$sacada];
                    $enJuegoNegro[$sacada]--;
                    
                } else {
                   $turnos--;
                }  
                echo  $sacada, ' negro + ', $puntos[$sacada], ' puntos<br>';
                $turnos++;
            }
            
            if ($jugadorBlanco >= 9 || $jugadorNegro >= 9) {
                $salir = true;
            }
            
        } while (!$salir);
        
        if ($jugadorBlanco >= 9) {
            echo '<br>El Jugador Negro se ha rendido, ha perdido ', $jugadorBlanco, ' peones';
        }
        
        if ($jugadorNegro >= 9) {
            echo '<br>El Jugador Blanco se ha rendido, ha perdido ', $jugadorNegro, ' peones';
        }
        
        ?>