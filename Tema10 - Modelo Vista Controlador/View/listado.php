<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Articulos</title>
  </head>
  <body>
  <h1>Blog de Articulos</h1>
  <a href="../Controller/nuevoArticulo.php">Nuevos Articulos</a>
  <hr>
  <?php
    foreach($data['articulos'] as $oferta)  {
    ?>
      <h3><?=$articulos->getTitArt()?></h3>
      <p><?=$articulos->getDescripArt()?></p><br>
      <a href="../Controller/borraArticulo.php?id=<?=$articulos->getCodArt()?>">Borrar</a>
    <?php
    }
  ?>
  </body>
</html>