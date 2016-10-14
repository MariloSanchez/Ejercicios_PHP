<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9 - Tema 4</title>
    </head>
    <body>
        <h1>Ejercicio 9</h1>
        <p>Realiza un programa que nos diga cuántos dígitos tiene un número 
           introducido por teclado.</p>
        <form action="ejercicio9.php" method="get">
            <p>Introduzca el número: </p>
            <input type="number" name="numero">
            <input type="submit" value="Contar dígitos">
            <?php
                $numero = $_GET['numero'];
                $digitos = 0;
                if(isset($numero)) {
                    while(round($numero) > 0) {
                        $digitos++;
                        $numero /= 10;
                    }
                    echo "El número tiene $digitos digitos.";
                }
            ?>
        </form>
    </body>
</html>