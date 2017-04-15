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
            $codigo = $_GET['codigo'];
            $articulos = $_SESSION['articulos'];
            $elemento = $articulos[$codigo];
        ?>
        <h1>¿Quieres eliminar los productos del carrito?</h1>
        <form action="ejercicio5.php" method="GET">
            <input type="hidden" name="codigo" value="<?=$codigo?>">
            <input type="hidden" name="accion" value="vaciarCarrito">
            <input type="submit" name="confirmacionDelete" value="si">
        </form>
            
        <form action="ejercicio5.php" method="GET">
            <input type="submit" name="confirmacionDelete" value="no">
        </form>
    </body>
</html>
