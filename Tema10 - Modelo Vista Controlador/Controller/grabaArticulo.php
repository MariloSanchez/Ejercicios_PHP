<?php
  require_once '../Model/Articulo.php';

  // inserta el en la base de datos
  $articuloAux = new Articulo("", $_POST['tituloArt'], $_POST['fechaArt'], $_POST['descripArt']);
  $articuloAux->insert();
  header("Location: index.php");