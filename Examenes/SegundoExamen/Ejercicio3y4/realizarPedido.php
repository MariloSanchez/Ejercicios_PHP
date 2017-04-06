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
            $total = 0;
            //array con los datos de los articulos que no hace falta meter los
            //datos otra vez ya que la session permanece abierta
            $articulos = $_SESSION['articulos'];
        ?>
        <div id="titulo"><header>TIENDA DIGIMON</header></div>
        <div id="contenedor">
            <!--carrito de la compra -->
            <?php
                $codigo = $_GET['codigo'];
                $accion = $_GET['accion'];

                if($accion == "eliminar"){
                    $_SESSION['carrito'][$codigo] = 0;
                }

                if($accion == "modificarCantidad"){
                    $_SESSION['carrito'][$codigo] = $_GET['cantidad'];
                }
            ?>
            <table id="articulosRealizarPedidos">
                <tr>
                    <td colspan="4"><h3>Detalles del Pedido</h3></td>
                </tr>
                    <?php
                        foreach ($articulos as $codigo => $elemento) {
                        if($_SESSION['carrito'][$codigo] > 0){
                            $total = $total + ($_SESSION['carrito'][$codigo] * $elemento['precio']);
                    ?>
                <tr id="pedirProductos">
                    <td><img src="<?=$elemento['imagen']?>" width="160px" border="1"></td>
                    <td class="centrarDatosProductos">
                        <b>Nombre</b>: <?=$elemento['nombre']?> </br> <b>Precio:</b> <?=$elemento['precio']?> €</br>
                        <form action="detalles_Del_Producto.php" method="GET">
                            <input type="hidden" name="codigo" value="<?=$codigo?>">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="submit" value="Eliminar" class="botonEliminar">
                        </form>
                    </td>
                    <td class="centrarDatosProductos">
                        <form action="realizarPedido.php" method="GET">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" id="cantidad" name="cantidad" value="<?= $_SESSION['carrito'][$codigo]; ?>" min="0" max="99" style="width: 35px; margin-bottom: 5px;" >
                            <input type="hidden" name="codigo" value="<?=$codigo?>">
                            <input type="hidden" name="accion" value="modificarCantidad">
                            <input type="submit" value="Ok" class="botonDetalles">
                        </form>
                    </td>
                </tr>
                
                <?php
                    $opcionesCarrito = 1;
                        }
                        }
        
                    if($_GET['accion'] == "gastosEnvio" && $total < 100){
                    $_SESSION['gastosEnvio'] = $_GET['gastosEnvio'];
                        $total += $_SESSION['gastosEnvio'];
                    }else{
                        $_SESSION['gastosEnvio'] = 0;
                    }

                    if($total >= 300){
                        $descuento = $total *(10/100);
                        $total = $total - $descuento;
                        $porcentaje = 10;
                    }else{
                        $porcentaje = 0;
                        $descuento = 0;
                    }
        
                    //pone el boton de realizar pedido y el de vaciarlo
                    if($opcionesCarrito == 1){
                ?>
                <tr>
                    <td>
                        <p>Descuento: <?php echo $descuento; ?> € </br>
                        porcentaje: <?php echo $porcentaje; ?>% </br>
                        Gastos de Envio: <?php echo $_SESSION['gastosEnvio']; ?> € </br>
                        Total: <?php echo $total;?> €</p>
                    </td>
                <tr>
                <tr>
                    <td>
                        <form action="pedidoRealizado.php" method="GET">
                            <input type="hidden" name="codigo" value="<?=$codigo?>">
                            <input type="hidden" name="accion" value="vaciarCarrito">
                            <input type="submit" value="Realizar pedido" class="realizarPedido" >
                        </form>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <form action="ejercicio5.php" method="get">
                            <input type="hidden" name="accion" value="vaciarCarrito">
                            <input type="submit" value="Vaciar Cesta" class="vaciarCarro">
                        </form>
                    </td>
                </tr>
                <?php
                    } else { //opciones carrito == 1
                ?>
                <tr>
                    <td>
                        <p style="text-align: center;">Carrito Vacio</p>
                    </td>
                </tr>
                <?php
                    } //cierre else
                ?>
                <tr>
                    <td><br>
                        <form class="gastosEnvios" action="realizarPedido.php" method="get" style="text-align: center;">
                            <label for="gastosEnvio">Gastos de envio:</label><br>
                            <select id="gastosEnvio" name="gastosEnvio" >
                                <option value="10">España</option>
                                <option value="20">Europa</option>
                                <option value="40">Resto Del mundo</option>
                            </select>
                            <input type="hidden" name="codigo" value="<?=$codigo?>">
                            <input type="hidden" name="accion" value="gastosEnvio">
                            <input type="submit" value="ok" class="botonEliminar">
                        </form>
                     </td>
                </tr>
            </table><!-- cierre de table articulosRealizarPedidos -->
             <!-- -------------------------------------------------- -->
             
        
        </div><!-- cierre del div contenedor -->
        
    </body>
</html>
