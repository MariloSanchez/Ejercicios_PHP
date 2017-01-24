<?php
 
    require_once '../Model/Articulo.php';

      // Obtiene todas las ofertas
      $data['articulos'] = Articulos::getArticulos();

      // Carga la vista de listado
      include '../View/listado.php';