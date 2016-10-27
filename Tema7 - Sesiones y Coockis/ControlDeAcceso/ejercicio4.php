<?php
    session_start(); // Inicio de sesión
    
    if(!isset ($_SESSION['logeado'])){
        $_SESSION['logueado'] = false;
        $_SESSION['usuario'] = "";
        $_SESSION['contraseña'] = "";
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
            //Comprobamos es correcto
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $error = "";
        
            if (isset($usuario) && isset($contrasena)) {
                
                $SESIION['logueado'] = true;
                $_SESSION['usuario'] = $usuario;
                $_SESSION['contraseña'] = $contrasena;
                
                if (($usuario == "marilo") && ($contrasena == "usuario")) {
                    header("Refresh: 0; url=ejercicio4.php?ejercicio=04", true, 303); // recarga la página
                } else {
                    $error = '<tr><td colspan="2"><span style="color: red;">'
                            . 'Usuario o contraseña incorrectos</span></td></tr>';
                }
            }
        ?>
        <div>
            <p>Iniciar sesión</p>
            <form action="ejercicio4.php" method="post">
                <input type="hidden" name="ejercicio" value="04">
                <table>
                    <tr>
                        <td>Usuario: </td><td><input type="text" name="usuario" autofocus></td><br>
                    </tr><tr>
                        <td>Contraseña:</td><td> <input type="password" name="contrasena"></td>
                    </tr>
                </table>
                <?= $error;?>
                <br><br>
                <input class="iniciar" type="submit" value="Iniciar sesión">
            </form>
            <br>
        </div>
        
        <?php
            if ($_SESSION['logueado']) {
                // Ejercicio 1 de la relación de Arrays /////////
                for ($i = 0; $i < 20; $i++) {
                  $numero[] = rand(0,100);
                }

                foreach ($numero as $elemento) {
                  $cuadrado[] = $elemento * $elemento;
                  $cubo[] = $elemento * $elemento * $elemento;
                }

                echo "<table>";
                echo "<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>";
                for ($i = 0; $i < 20; $i++) {
                  echo "<tr><td>".$numero[$i]."</td>";
                  echo "<td>".$cuadrado[$i]."</td>";
                  echo "<td>".$cubo[$i]."</td></tr>";
                }
                echo "</table>";
                //////////////////////////////////////////////////
              } 
        ?>
    </body>
</html>
