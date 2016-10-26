<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
        <style>
            table{
                margin: auto;
                margin-top: 5%;
                border-collapse: collapse;
                width: 50%;
            }
            table, td, th {
                border: 1px solid black;
                text-align: center;
            }
            th{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
            for($i = 0; $i <= 20; $i++){ //recorro el array y le añado 20 numero
                $numero[] = rand(0, 100);
            }
            foreach ($numero as $elemento) { // lo hago para no perder valores del array
                $cuadrado[] = $elemento * $elemento; //y multiplicarlos por ellos mismos
                $cubo[] = $elemento * $elemento * $elemento;
            }
        ?>
            <table>
                <tr>
                    <th>Número</th>
                    <th>Cuadrado</th>
                    <th>Cubo</th>
                </tr>

        <?php
                for ($i = 0; $i < 20; $i++) {//los muestro
                    echo "<tr><td>".$numero[$i]."</td>";
                    echo "<td>".$cuadrado[$i]."</td>";
                    echo "<td>".$cubo[$i]."</td></tr>";
                }
        ?>
            </table>
    </body>
</html>
