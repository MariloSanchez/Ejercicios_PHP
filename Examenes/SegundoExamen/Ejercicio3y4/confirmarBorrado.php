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
            $accion = $_GET['accion'];
        ?>
        <h1>¿Quieres eliminar los productos del carrito?</h1>
        <form action="ejercicio5.php" method="GET">
                Si<input type="checkbox" name="confirmacionDelete" value="si">
                No<input type="checkbox" name="confirmacionDelete" value="no">
                <input type="hidden" name="codigo" value="<?=$codigo?>">
                <input type="hidden" name="accion" value="<?=$accion?>">
                <input type="submit" value="aceptar" class="botonEliminar">
        </form>
    </body>
</html>
