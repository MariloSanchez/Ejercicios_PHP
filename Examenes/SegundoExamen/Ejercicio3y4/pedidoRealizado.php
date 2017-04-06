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
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <style>
        div{
            margin: 0 auto;
            text-align: center;
            position: absolute;
            /*nos posicionamos en el centro del navegador*/
            top:50%;
            left:50%;
            width:400px;
            /*indicamos que el margen izquierdo, es la mitad de la anchura*/
            margin-left:-210px;
            /*determinamos una altura*/
            height:300px;
            /*indicamos que el margen superior, es la mitad de la altura*/
            margin-top:-200px;
            padding:5px;
        }
    </style>
    </head>
    <body>
        <div>
            <h1>Pedido Realizado</h1>
            <img src="img/carga.png" height="450"> </br>
        </div>
        <?php
            header("Refresh: 2; url=ejercicio5.php");//esto redirecciona a otra pagina
            foreach ($_SESSION['articulos'] as $clave => $elemento) {
                $_SESSION['carrito'][$elemento['nombre']] = 0;
            }
        ?>
    </body>
</html>
