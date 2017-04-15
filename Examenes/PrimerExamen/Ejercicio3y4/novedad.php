<?php
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión

    //inicializa el carrito a cero
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = ["gatomon" => 0, "patamon" => 0, "gabumon" => 0, 
            "agumon" => 0, "piyomon" => 0];
    }

    //hace que se pueda poner un gasto de envio con un cupon descuento
    if(!isset($_SESSION['gastosEnvio'])){
      $_SESSION['gastosEnvio'] = 0;
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="titulo"><header>TIENDA DIGIMON</header></div>
        
         <div id="contenedor">
        <!--muestra articulos-->
            <table id="articulos">
                
                <tr>
                    <td colspan="4"><h3>Digimon en novedad</h3></td>
                </tr>
                <tr>
                    <?php
                    $articulos = $_SESSION['articulos'];
                    
                    foreach ($articulos as $clave => $elemento) {   
                        if ($elemento['novedad'] == "si") {
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
                            }//cierre del if
                        } //cierre del foreach
                    ?>
                </tr> 
            </table> <!--cierre table articulos-->
             <form action="ejercicio5.php" method="post">
                <input class="volver" type="submit" value="Volver a la tienda">
            </form>
        </div>
    </body>
</html>

