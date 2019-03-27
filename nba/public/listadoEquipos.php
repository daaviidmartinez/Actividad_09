<?php
$conexion = new mysqli("localhost", "root", "", "nba");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}elseif ((!empty($_POST["Nombre"])&&(!empty($_POST["Ciudad"]))&&(!empty($_POST["Conferencia"])))) {
$consulta = "INSERT INTO equipos (Nombre, Ciudad, Conferencia) VALUES ('$nombre', '$ciudad', '$conferencia')";
$resultado = $conexion->query($consulta);
$resultado = $conexion->query("SELECT * FROM equipos");
}
else {
$resultado = $conexion->query("SELECT * FROM equipos");
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
    <?php
        echo "<div class='w3-bar w3-black'>";
        echo "<a href='index.php' class='w3-bar-item w3-button'>Inicio</a>";
        echo "<a class='w3-bar-item'>Jugadores</a>";
        echo "</div>";
    ?>

    <div>
  <table>

    <tr>
      <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Ciudad</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Conferencia</b></td>
    </tr>
      <?php foreach ($resultado as $equipo) {
          echo "<tr>";
          echo "<td style='text-align:center'>".$equipo["Nombre"]."</td>";
          echo "<td style='text-align:center'>".$equipo["Ciudad"]."</td>";
          echo "<td style='text-align:center'>".$equipo["Conferencia"]."</td>";
        }
        ?>
</tr>
</table>

  </body>
</html>