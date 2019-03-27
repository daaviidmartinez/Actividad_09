<?php
/**
 * Jugador
 */
class Jugador
{
  private $conexion=null;
  private $codigo;
  private $nombre;
  private $peso;
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
    if(!isset($post)||!isset($post["codigo"])||!isset($post["Nombre"])||!isset($post["Peso"])){
      $error="";
    }elseif($post["codigo"]==""){
      $error="No has introducido el codigo";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["Peso"]==""){
      $error="No has introducido el Peso";
    }else{
      $error=false;
      $this->codigo=$post["codigo"];
      $this->nombre=$post["Nombre"];
      $this->peso=$post["Peso"];
    }
    return $error;
  }
  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
  public function insertarJugador(){
    $consulta="INSERT INTO jugadores (codigo, Nombre, Procedencia, Altura, Peso, Posicion, Nombre_equipo)
                VALUES ($this->codigo, '$this->nombre', NULL, NULL, $this->peso, NULL, NULL)";
    $this->conexion->query($consulta);
  }
}
 ?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">

    <title></title>
        <link rel="stylesheet" href="nba/public/css/nba.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>

  </body>
</html>