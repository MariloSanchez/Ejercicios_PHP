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
        <h2>DICCIONARIO ESPAÑOL-FRANCÉS</h2>
<?php
if(isset($_GET['palabra'])){
    $palabra = $_GET['palabra'];
    
    $diccionarioIngles = array (
      "ordenador" => "computer",      
      "rojo" => "red",
      "sol" => "sun",
      "leche" => "milk",
      "manzana" => "apple");
    
    $diccionarioFrances = array (
      "computer" => "ordinateur",      
      "red" => "rouge",
      "sun" => "soleil",
      "milk" => "lait",
      "apple" => "pomme");
    
    //recorro el diccionario de ingles
    foreach ($diccionarioIngles as $clave => $valor) {
        $palabrasInglesas[] = $clave;
    }
    
    //relaciono la palabra con su valor
    if (in_array($palabra, $palabrasInglesas)) {
        echo "<b>$palabra</b> en inglés es <b>".$diccionarioIngles[$palabra]." </b>";
    } else{
        echo "Lo siento, no conozco esa palabra.<br><br>";
    }
    
    //recorro el diccionario frances
    foreach($diccionarioFrances as $codigo => $valor1){
        $palabrasFrancesas[] = $codigo;
        $codigo = $diccionarioIngles[$palabra];//codigo igual a la palabra en ingles
    }
    if (in_array($codigo, $palabrasFrancesas)) {
        echo " y en francés es <b>".$diccionarioFrances[$codigo]." </b>";
    } 
}
?>
    <form action="ex29msc04.php" method="get">
        Introduzca la palabra en español : <input type="text" name ="palabra" autofocus="" required="">
        <input type="submit" value="OK">
    </form>

</body>
</html>

