<?php
/**
 * Equipo
 */
class Equipo
{
  private $conexion=null;
  private $nombre;
  private $ciudad;
  private $conferencia;
  function __construct()
  {
  }
  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["Nombre"])||!isset($post["Ciudad"])||!isset($post["Conferencia"])){
      $error="";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["Ciudad"]==""){
      $error="No has introducido el Ciudad";
    }elseif ($post["Conferencia"]=="") {
        $error="No has introducido la Conferencia";
    }else{
      $error=false;
      $this->nombre=$post["Nombre"];
      $this->ciudad=$post["Ciudad"];
      $this->conferencia=$post["Conferencia"];
    }
    return $error;
  }
  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
  public function insertarEquipo(){
    $consulta="INSERT INTO equipos (Nombre, Ciudad, Conferencia) 
            VALUES ($this->nombre, $this->ciudad, $this->conferencia)";
    $this->conexion->query($consulta);   
  }
}
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">

    <title></title>
        <link rel="stylesheet" href="css/nba.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>

  </body>
</html>