<?php
require "equipo.php";
  $j=new Equipo();
  $error=$j->comprobarCampos($_POST);
  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->conectar();
        $j->insertarEquipo();
      }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "./assets/navSup.php"; ?>
    <!-- ERRORES Y MENSAJES-->
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
    <!-- Formulario de insercion -->
    <h2>Insertar Equipo</h2>
 <form class="" action="insertarEquipo.php" method="post">
      <div class="grupoFormItem">
        <label for="Nombre"></label>
        <span class="formLabel">Nombre </span><br>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Ciudad"></label>
        <span class="formLabel">Ciudad </span><br>
        <input type="text" name="Ciudad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Conferencia"></label>
        <span class="formLabel">Conferencia </span><br>
        <input type="text" name="Conferencia" value="">
      </div>
      <br>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>