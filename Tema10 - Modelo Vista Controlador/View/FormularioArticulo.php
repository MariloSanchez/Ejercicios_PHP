<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form action="../Controller/grabaArticulo.php"  enctype="multipart/form-data" method="POST">
      <h3>Título</h3>
      <input type="text" size="40" name="titulo">
      <br><h3>Descripción</h3>
      <textarea name="descripcion" cols="60" rows="6">
      </textarea><hr>
      <input type="submit" value="Aceptar">
    </form>
  </body>
</html>
