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
        <div>
            <?php
                $hora = $_GET['hora'];

                if(($hora >= 6) && ($hora <= 12)){
                    echo "BUENOS DIAS";
                }
                if(($hora >= 13) && ($hora <= 20)){
                    echo "BUENAS TARDES";
                }
                if( ($hora >= 21) && ($hora <= 24) || ($hora >= 1) && ($hora <= 5) ){
                    echo "BUENAS NOCHES";
                }
            ?>
            <br><br>
            <form action="index.php">
                <input type="submit" value="VOLVER">
            </form>
        </div>
    </body>
</html>
