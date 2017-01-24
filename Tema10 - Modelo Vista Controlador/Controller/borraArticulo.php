<?php
  require_once '../Model/Articulo.php';
  $articuloAux = new Articulo($_GET['codArt']);
  $articuloAux->delete();
  header("Location: index.php");
