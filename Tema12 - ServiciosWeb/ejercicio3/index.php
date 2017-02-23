<!DOCTYPE html>
<!-- 
Para que funcione la url debe de ser (ej):
    -localhost/ServiciosWeb/ejercicio3/index.php?moneda=pesetas&cantidad=1000;
    -localhost/ServiciosWeb/ejercicio3/index.php?moneda=euros&cantidad=6;

Lo de localhost es porque tengo el ejercicio guardado en xamp y si no pongo la 
ruta no funiona
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversor</title>
    </head>
    <body>
        <?php
            $moneda = $_GET["moneda"];
            $cantidad = $_GET["cantidad"];
            if($cantidad > 0){
                if($moneda == 'euros'){
                    $res = $cantidad*166.38;
                    $resultado[] = [
                        'moneda' => 'pesetas',
                        'cantidad'=> $res
                    ];
                    echo "El resultado en json es: ";
                    echo json_encode($resultado);
                    echo "<br>La moneda es: pesetas<br>La cantidad es: $res";
                }else if($moneda=='pesetas'){
                    $res = $cantidad/166.38;
                    $resultado[] = [
                        'moneda' => 'euros',
                        'cantidad'=> $res
                    ];
                    echo "El resultado en json es: ";
                    echo json_encode($resultado);
                    echo "<br>La moneda es: euros<br>La cantidad es: $res";
                }else{
                    echo "El tipo de moneda es incorrecta.";
                }
            }else{
                echo "Cantidad incorrecta.";
            }
        ?>
    </body>
</html>