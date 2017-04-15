<?php
error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
session_start();// Inicia la sesión
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title></title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>DIGIMON SAGRADO</h1>
            </div>

            <div id="contenedor">
                <!--muestra articulos-->
            <table id="articulos">
                <tr>
                    <?php
                    $articulos = $_SESSION['articulos'];
                    foreach ($articulos as $clave => $elemento) {
                        if ($elemento['categoria'] == "Digimon Sagrado") {
                    ?>
                    <td>
                        <div id="imagenes">
                            <img src="<?=$elemento['imagen']?>" width="160px" height="160px" border="1">
                        </div><br>
                        <b>Nombre:</b>: <?=$elemento['nombre']?> <br> 
                        <b>Precio:</b> <?=$elemento['precio']?> €<br>
                        
                        <div class="formularios"> <!-- boton detalles -->
                            <form action="detalles_Del_Producto.php" method="get" >
                                <input type="hidden" name="codigo" value="<?=$clave?>">
                                <input type="hidden" name="accion" value="detalles">
                                <input type="submit" value="Detalles" class="botonDetalles">
                            </form>
                        </div>
                        <div class="formularios"> <!-- boton de compra -->
                            <form action="ejercicio5.php" method="GET">
                                <input type="hidden" name="codigo" value="<?= $clave?>">
                                <input type="hidden" name="accion" value="comprar">
                                <input type="submit" value="Comprar" class="botonComprar">
                            </form>
                        </div>
                        <div class="opciones"> <!-- icono tres puntitos -->
                            <form action="administracion_producto.php" method="GET">
                                <input type="hidden" name="codigo" value="<?= $clave?>">
                                <input type="image" src="img/opciones.png" width="18" title="opciones">
                            </form>
                        </div>
                    </td>
                    <?php
                        } //cierre del if
                    }//cierre del foreach
                    ?>
                </tr> 
            </table> <!--cierre table articulos-->
                
            <form action="ejercicio5.php" method="post">
                <input class="volver" type="submit" value="Volver a la tienda">
            </form>
            
            </div>
                <br><br>
        </div>
</body>
</html>