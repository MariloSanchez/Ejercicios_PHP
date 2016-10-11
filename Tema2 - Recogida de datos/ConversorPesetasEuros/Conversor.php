<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CONVERSOR</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
            $pesetas = $_GET['pesetas'];
            echo "$pesetas pesetas = " , round($pesetas/166,2) , " euros";
        ?>
    </body>
</html>
