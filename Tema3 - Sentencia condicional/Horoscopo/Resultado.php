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
            $dia = $_GET['dia'];
            $mes = $_GET['mes'];
            
            $horoscopo = "";
            
            switch($mes) {
            case 1:
              if ($dia < 21) {
                $horoscopo = "CAPRICORNIO";
              } else {
                $horoscopo = "ACUARIO";
              }
              break;
              
            case 2:
              if ($dia < 20) {
                $horoscopo = "ACUARIO";
              } else {
                $horoscopo = "PISCIS";
              }
              break;
              
            case 3:
              if ($dia < 21) {
                $horoscopo = "PISCIS";
              } else {
                $horoscopo = "ARIES";
              }
              break;
              
            case 4:
              if ($dia < 21) {
                $horoscopo = "ARIES";
              } else {
                $horoscopo = "TAURO";
              }
              break;
              
            case 5:
              if ($dia < 20) {
                $horoscopo = "TAURO";
              } else {
                $horoscopo = "GÉMINIS";
              }
              break;
              
            case 6:
              if ($dia < 22) {
                $horoscopo = "GÉMINIS";
              } else {
                $horoscopo = "CÁNCER";
              }
              break;
              
            case 7:
              if ($dia < 22) {
                $horoscopo = "CÁNCER";
              } else {
                $horoscopo = "LEO";
              }
              break;
              
            case 8:
              if ($dia < 24) {
                $horoscopo = "LEO";
              } else {
                $horoscopo = "VIRGO";
              }
              break;
              
            case 9:
              if ($dia < 23) {
                $horoscopo = "VIRGO";
              } else {
                $horoscopo = "LIBRA";
              }
              break;
              
            case 10:
              if ($dia < 23) {
                $horoscopo = "LIBRA";
              } else {
                $horoscopo = "ESCORPIO";
              }
              break;
              
            case 11:
              if ($dia < 23) {
                $horoscopo = "ESCORPIO";
              } else {
                $horoscopo = "SAGITARIO";
              }
              break;
              
            case 12:
              if ($dia < 21) {
                $horoscopo = "SAGITARIO";
              } else {
                $horoscopo = "CAPRICORNIO";
              }
              break;
          }
          
          echo $horoscopo;
        ?>
        <form action="index.php">
            <input type="submit" value="VOLVER">
        </form>
    </body>
</html>
