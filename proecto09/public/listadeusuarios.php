<?php
    require "./../src/conex.php";
    require "../src/Usuario.php";
    $t=new Usuario();
    $t->conectar();
    $tabla=$t->listarUsuarios();
    $resultado=$t->nav();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">

    <title></title>
  <link rel="stylesheet" href="./css/estilos.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <?php
    require "assets/navSup.php";
    ?>

    <div>
  <table>

    <tr>
      <td style="background-color:#498150; text-align:center;"><b>ID</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Apellidos</b></td>
      <td style="background-color:#498150;text-align:center;"><b>curso</b></td>
      <td style="background-color:#498150; text-align:center;"><b>puntuacion</b></td>
    </tr>
      <?php foreach ($tabla as $usuario) {
          echo "<tr>";
          echo "<td style='text-align:center'>".$usuario["id"]."</td>";
          echo "<td style='text-align:center'>".$usuario["nombre"]."</td>";
          echo "<td style='text-align:center'>".$usuario["apellidos"]."</td>";
          echo "<td style='text-align:center'>".$usuario["curso"]."</td>";

        }
        ?>
</tr>
</table>

  </body>
</html>
