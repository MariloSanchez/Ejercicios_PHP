<?php
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión

    //inicializa el carrito a cero
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = ["gatomon" => 0, "patamon" => 0, "gabumon" => 0, 
            "agumon" => 0, "piyomon" => 0];
    }
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
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
            //array con los datos de los articulos
            $articulos = $_SESSION['articulos'];
        ?>
        <div id="titulo"><header>TIENDA DIGIMON</header></div>
        
        <div id="contenedor"> 
            <!--muestra Detalles del articulo-->
            <table id="articulos">
                <tr>
                    <td colspan="4"><h3>Detalles</h3></td>
                </tr>
            <tr>
                <?php
                    $codigo = $_GET['codigo'];
                    $articulos = $_SESSION['articulos'];
                    $elemento = $articulos[$codigo];
                    //foreach ($articulos as $clave => $elemento) {
                    //if($codigo == $elemento['nombre']){
                ?>

                <td>
                    <div id="imagenes">
                        <img src="<?=$elemento['imagen']?>" width="160px" border="1">
                    </div><br>
                    <b>Nombre</b>: <?=$elemento['equipo']?> </br> <b>Precio:</b> <?=$elemento['precio']?> €</br></br>
                    <div id="formularios">
                        <form action="detalles_Del_Producto.php" method="GET">
                            <input type="hidden" name="codigo" value="<?=$clave?>">
                            <input type="hidden" name="accion" value="comprar">
                            <input type="submit" value="Comprar" class="botonComprar">
                        </form>
                    </div>
                    <div id="botonVolver" >
                        <form action="ejercicio5.php" method="GET">
                            <input type="submit" value="Volver" class="botonEliminar" >
                        </form>
                    </div>
                </td>

                <td id="texto">
                    <p><?=$elemento['Detalles']?></p>
                </td>
                <?php
                    //}
                    //}
                ?>
            </tr>
        
      </table> <!-- cierre tabla articulos -->
      <!-- -------------------------------------------------- -->

      <!--carrito de la compra -->
      <?php      
        if($accion == "comprar"){
            $_SESSION['carrito'][$codigo]++;
        }

        if($accion == "eliminar"){
            $_SESSION['carrito'][$codigo] = 0;
        }

        if($accion == "modificarCantidad"){
            $_SESSION['carrito'][$codigo] = $_GET['cantidad'];
        }

        if($accion == "vaciarCarrito"){
            foreach ($articulos as $clave => $elemento) {
                $_SESSION['carrito'][$elemento['nombre']] = 0;
            }
        }

        $total = 0;
        ?>
        <table id="carrito">
            <tr>
                <td colspan="4"><h3> <img src="img/carrito.png" width="20px"> Carrito</h3></td>
            </tr>

            <?php
                foreach ($articulos as $codigo => $elemento) {
                if($_SESSION['carrito'][$codigo] > 0){
                    $total = $total + ($_SESSION['carrito'][$codigo] * $elemento['precio']);
            ?>
            <tr>
                <td>
                    <div id="imagenes">
                        <form action="detalles_Del_Producto.php" method="GET">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" id="cantidad" name="cantidad" value="<?= $_SESSION['carrito'][$codigo]; ?>" min="0" max="99" style="width: 35px; margin-bottom: 5px;" >
                            <input type="hidden" name="codigo" value="<?=$codigo?>">
                            <input type="hidden" name="accion" value="modificarCantidad">
                            <input type="submit" value="Ok" class="botonDetalles">
                        </form>
                        <img src="imagenes/<?=$elemento['imagen']?>" width="160px" border="1">
                    </div><br>
                    <b>Nombre</b>: <?=$elemento['equipo']?> </br> <b>Precio:</b> <?=$elemento['precio']?> €</br>
                    <form action="detalles_Del_Producto.php" method="GET">
                        <input type="hidden" name="codigo" value="<?=$codigo?>">
                        <input type="hidden" name="accion" value="eliminar">
                        <input type="submit" value="Eliminar" class="botonEliminar">
                    </form>
                </td>
            </tr>
            <?php
                $opcionesCarrito = 1;
                }
                }
        
                //pone el boton de realizar pedido y el de vaciarlo
                if($opcionesCarrito == 1){
            ?>
            <tr>
                <td><p>Total: <?php echo $total; ?> €</p></td>
            </tr>
            <tr>
                <td>
                    <form action="realizarPedido.php" method="GET">
                        <input type="hidden" name="codigo" value="<?=$codigo?>">
                        <input type="hidden" name="accion" value="vaciarCarrito">
                        <input type="submit" value="Realizar pedido" class="realizarPedido" >
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="detalles_Del_Producto.php" method="GET">
                        <input type="hidden" name="codigo" value="<?=$codigo?>">
                        <input type="hidden" name="accion" value="vaciarCarrito">
                        <input type="submit" value="Vaciar Cesta" class="vaciarCarro">
                    </form>
                </td>
            </tr>
            <?php
                } else {
            ?>
            <tr>
                <td>
                    <p style="text-align: center;">Carrito Vacio</p>
                </td>
            </tr>
            <?php
                }
            ?>
        </table><!-- cierre table carrito -->
      
        </div> <!-- cierre div contenedor -->
    </body>
</html>
