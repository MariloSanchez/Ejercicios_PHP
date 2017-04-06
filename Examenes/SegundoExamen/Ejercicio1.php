<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
            body {
                text-align: center;
            }
        </style>  
</head>
<body>
    <?php
        $numero = $_GET['numero'];
        $numeroTexto = $_GET['numeroTexto'];
        
        if(!isset($numero)){
            $numeroTexto = "";
        }
        
        //Muestro los numeros introducidos
        if($numero < 0){
            $numeroTexto = $numeroTexto;
            $numeroTexto = substr ($numeroTexto, 2);//dos primeros espacios de la cadena
            $numero = explode (" ", $numeroTexto);
            //$arrayFinal = new SplFixedArray(count($numero));
            //$contadorNumeros = 0;
            
            echo "<strong>Los numeros introducidos son: </strong><br>";
            foreach ($numero as $n){
                echo "$n "; 
            }
            
            echo "<br><span><strong>Y los números pintados son: </strong></span><br>";  
            foreach ($numero as $n){
                if(($n % 2 == 0) && ($n % 5 == 0)){
                    //$arrayFinal[$contadorNumeros] = $n;
                    echo "<span style=\"color:blue\">$n </span>";
                }else if($n % 2 == 0){
                    //$arrayFinal[$contadorNumeros] = $n;
                    echo "<span style=\"color:green\">$n </span>";
                }else if($n % 5 == 0){
                    //$arrayFinal[$contadorNumeros] = $n;
                    echo "<span style=\"color:red\">$n </span>";
                } else {
                    //$arrayFinal[$contadorNumeros] = $n;
                    echo $n . " ";
                }
                //$contadorNumeros++;
            }    
        }
        //si es nulo o el mayor a 0 sigue pidiendo numeros
        if(!isset($numero) || ($numero >=0)){
    ?>
    <form action="#" method="GET">
        <h1>Si quieres salir debes introducir un numero negativo</h1><br>
        Introduzca un número:<input type="number" name="numero" autofocus>
        <input  placeholder="numeroTexto" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
        
        <input type="submit" value="OK">
    </form>
        <?php
        }
        ?>
</body>
</html>
