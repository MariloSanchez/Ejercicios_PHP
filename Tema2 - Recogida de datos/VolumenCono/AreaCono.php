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
        $altura = $_GET['altura'];
        $radio = $_GET['radio'];
        
        echo "El área del cono es " , (3.14*($radio*2)* $altura)/3;
        ?>
    </body>
</html>
