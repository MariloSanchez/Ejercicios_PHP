<?php
require_once 'BlogBD.php';


class Articulo {
    //Atributos instancia
    private $codArt;
    private $tituloArt;
    private $fechaArt;
    private $descripArt;
    //Constructor
    function __construct($tit, $des, $fech, $cod) {
        $this->descriptArt = $des;
        $this->titArt = $tit;
        if(isset($fech)){
            $this->fechArt = $fech;
            $this->codArt = $cod;
        }
    }
    //Getters y setters
    function getCodArt() {
        return $this->codArt;
    }
    function getTitArt() {
        return $this->titArt;
    }
    function getFechArt() {
        return $this->fechArt;
    }
    function getDescripArt() {
        return $this->desArt;
    }
    function setCodArt($codArt) {
        $this->codArt = $codArt;
    }
    function setTitArt($titArt) {
        $this->titArt = $titArt;
    }
    function setFechArt($fechArt) {
        $this->fechArt = $fechArt;
    }
    function setDesArt($desArt) {
        $this->desArt = $DesArt;
    }
    //Métodos instancia
    public function insert() { //para insertar un articulo
        $conexion = BlogBD::connectDB();
        $insercion = "INSERT INTO ARTICULO (TitArt, ContArt)"
                . " VALUES (\"".$this->titArt."\", \"".$this->contArt."\")";
        $conexion->exec($insercion);
    }
    public function delete() { //para borrar un articulo
        $conexion = BlogBD::connectDB();
        $borrado = "DELETE FROM ARTICULO WHERE CodArt=\"".$this->codArt."\"";
        $conexion->exec($borrado);
    }
    public function update($codArt) { //para modificar un articulo
    $conexion = BlogBD::connectDB();
    $update = "UPDATE ARTICULO SET TitArt=\"".$this->titArt."\", ContArt=\"".$this->contArt."\"".
            " WHERE CodArt=".$codArt;
    $conexion->exec($update);
  }
    //Métodos de clase
    public static function getArticulos() {
        $conexion = BlogBD::connectDB();
        $seleccion = "SELECT * FROM ARTICULO";
        $consulta = $conexion->query($seleccion);    
        $articulos= [];    
        while ($registro = $consulta->fetchObject()) {
          $articulos[] = new Articulo($registro->TitArt, $registro->DesArt, $registro->FechArt, $registro->CodArt);
        }   
        return $articulos;    
    }
    public static function getArticulo($atributo, $valor) {
        $conexion = BlogBD::connectDB();
        $seleccion = "SELECT * FROM ARTICULO WHERE ".$atributo. "=\"".$valor."\"";
        $consulta = $conexion->query($seleccion);  
        $registro = $consulta->fetchObject();
        $articulo = new Articulo($registro->TitArt, $registro->DesArt, $registro->FechArt, $registro->CodArt);
        return $articulo;
    }
}