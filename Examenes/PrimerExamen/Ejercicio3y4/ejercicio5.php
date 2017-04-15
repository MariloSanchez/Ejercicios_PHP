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
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Tienda Online</title>
    </head>
    <body>
        <?php  
            $_SESSION['gastosEnvio'] = 0;
            //Array con los datos de los articulos
            if(!isset($_SESSION['articulos'])){
                $_SESSION['articulos'] = [
                    "gatomon" => [ 
                        "nombre" => "Gatomon", 
                        "precio" => 100, 
                        "imagen" => "img/gatomon.png",
                        "Detalles" => "<b>DIGIMON ANGEL</b> Su digievolucion es en ángel por lo que es un digimon sagrado",
                        "categoria" => "Digimon Sagrado",
                        "oferta" => "no",
                        "novedad" => "si"],
                    "patamon" => [ 
                        "nombre" => "Patamon", 
                        "precio" => 100, 
                        "imagen" => "img/patamon.png",
                        "Detalles" => "<b>DIGIMON ANGEL</b> Su digievolucion es en ángel por lo que es un digimon sagrado",
                        "categoria" => "Digimon Sagrado",
                        "oferta" => "si",
                        "novedad" => "no"],
                    "gabumon" => [ 
                        "nombre" => "Gabumon", 
                        "precio" => 50, 
                        "imagen" => "img/gabumon.png",
                        "Detalles" => "<b>DIGIMON NORMAL</b> Su digievolucion es en dinosaurio por lo que es un digimon normal",
                        "categoria" => "Normal",
                        "oferta" => "no",
                        "novedad" => "si"],
                    "agumon" =>  [ 
                        "nombre" => "Agumon", 
                        "precio" => 50, 
                        "imagen" => "img/agumon.png",
                        "Detalles" => "<b>DIGIMON NORMAL</b> Su digievolucion es en lobo por lo que es un digimon normal",
                        "categoria" => "Normal",
                        "oferta" => "si",
                        "novedad" => "no"],
                    "piyomon" => [ 
                        "nombre" => "Piyomon", 
                        "precio" => 50, 
                        "imagen" => "img/piyomon.png",
                        "Detalles" => "<b>DIGIMON NORMAL</b> Su digievolucion es en Fénix por lo que es un digimon normal",
                        "categoria" => "Normal",
                        "oferta" => "no",
                        "novedad" => "si"],
                ];
            }//cierre del if isset
            $articulos = $_SESSION['articulos'];
        ?>
        
        <div id="titulo"><header>TIENDA DIGIMON</header></div>
        
        <div id="contenedor">
            
            <div id="botones" style="text-align: center;">                
                <h2>CATEGORIAS</h2>
                <form action="categoriaSagrado.php" method="GET" style="text-align: center;">                  
                    <input type="hidden" name="accion" value="Digimon Sagrado">                          
                    <input id="ofertas" type="submit" value="Digimons Sagrados" class="botonesMenu">       
                </form>
                <form action="categoriaNormal.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="Normal">                          
                    <input id="ofertas" type="submit" value="Digimons Normal" class="botonesMenu">
                </form>
                <!-- OFERTA Y NOVEDAD -->
                <h2>EN OFERTA | EN NOVEDAD</h2>
                <form action="oferta.php" method="get">
                    <input type="hidden" name="accion" value="oferta">                          
                    <input id="ofertas" type="submit" value="Digimons en Ofertas" class="botonesMenu">
                </form>
                <form action="novedad.php" method="get">
                    <input type="hidden" name="accion" value="novedad">                          
                    <input id="novedades" type="submit" value="Digimons en Novedades" class="botonesMenu">
                </form>              
            </div>
            
            <!--muestra articulos-->
            <table id="articulos">
                
                <tr>
                    <td colspan="4"><h3>Compra tu Digimon</h3></td>
                </tr>
                <tr>
                    <?php
                    foreach ($articulos as $clave => $elemento) {                      
                    ?>
                    <td>
                        <div id="imagenes">
                            <img src="<?=$elemento['imagen']?>" width="160px" height="160px" border="1">
                        </div><br>
                        <b>Nombre:</b> <?=$elemento['nombre']?> <br> 
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
                        } //cierre del foreach
                    ?>
                </tr> 
            </table> <!--cierre table articulos-->
            
            <!-- -------------------------------------------------- -->

            <!--carrito de la compra -->
            <?php
                $codigo = $_GET['codigo'];
                $accion = $_GET['accion'];
                
                if($accion == "comprar"){
                    $_SESSION['carrito'][$codigo]++;
                }
                
                if($accion == "eliminar" && $_GET['confirmacionDelete'] == "si"){
                    $_SESSION['carrito'][$codigo] = 0;
                }
                
                if($accion == "vaciarCarrito" && $_GET['confirmacionDelete'] == "si"){
                     $_SESSION['carrito'] = ["gatomon" => 0, "patamon" => 0, "gabumon" => 0, 
                        "agumon" => 0, "piyomon" => 0];
                }
                
                if($accion == "modificarCantidad"){
                    $_SESSION['carrito'][$codigo] = $_GET['cantidad'];
                }
                $total = 0;
            ?>
            <table id="carrito">
                <tr>
                    <td><h3><img src="img/carrito.png" width="20px;"> Carrito</h3></td>
                </tr>
                <?php
                    foreach ($articulos as $codigo => $elemento) {
                        if($_SESSION['carrito'][$codigo] > 0){
                            $total = $total + ($_SESSION['carrito'][$codigo] * $elemento['precio']);
                    ?>
                    <tr>
                        <td>
                            <div id="imagenes">
                                <form action="ejercicio5.php" method="GET">
                                    <label for="cantidad">Cantidad:</label>
                                    <input type="number" id="cantidad" name="cantidad" value="<?= $_SESSION['carrito'][$codigo]; ?>" min="0" max="99" style="width: 35px; margin-bottom: 5px;" >
                                    <input type="hidden" name="codigo" value="<?=$codigo?>">
                                    <input type="hidden" name="accion" value="modificarCantidad">
                                    <input type="submit" value="Ok" class="botonDetalles">
                                </form>
                                <img src="<?=$elemento['imagen']?>" width="160px" border="1">
                            </div><br> <!-- cierre div imagnes -->
                            <b>Nombre:</b> <?=$elemento['nombre']?> </br> 
                            <b>Precio:</b> <?=$elemento['precio']?> €</br>
                            <form action="eliminarProducto.php" method="GET">
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
                        <form action="confirmarBorrado.php" method="GET">
                            <input type="hidden" name="accion" value="vaciarCarrito">
                            <input type="submit" value="Vaciar Cesta">
                        </form>
                    </td>
                </tr>
                <?php
                    } else {
                ?>
                <tr>
                    <td><p style="text-align: center;">Carrito Vacio</p></td>
                </tr>
                <?php
                    }
                ?>
            </table> <!--cierre de la tabla carrito-->
        </div> <!--cierre del div contenedor-->
        <div id="alta">
            <form action="alta_articulos.php" method="GET">
                <input type="submit" value="Alta producto" class="botonDetalles">
            </form>
        </div>
        
            
    </body>
</html>
