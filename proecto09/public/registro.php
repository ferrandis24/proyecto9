<?php
require "./../src/conex.php";
require "../src/Usuario.php";
  $j=new Usuario();
      $j->conectar();
  $error=$j->comprobarCampos($_POST);
    $resultado=$j->nav();
  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->insertar();
      }
  }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">
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
    <div id="registro">

    <form class="" action="registro.php" method="post">

        <label for="nombre">nombre</label>
        <br>
        <input type="text" name="nombre" id="nombre" value="">
        <div id="hidden1" style="display:none;">No puede dejarse en blanco</div>
        <br><br>
        <label for="apellidos">apellidos</label>
        <br>
        <input type="text" name="apellidos" id="apellidos" value="">
        <div id="hidden2" style="display:none;">No puede dejarse en blanco</div>
        <br><br>
        <label for="curso">curso</label>
        <br>
        <input type="text" name="curso" id="curso" value="">
        <div id="hidden3" style="display:none;">No puede dejarse en blanco</div>
        <div id="hidden4" style="display:none;">Utiliza numeros</div>
        <br><br>
        <br>
        <input type="submit" value="enviar" onclick="return comprobar()">
      </form>
        <script type="text/javascript"src="js/comprobar.js"></script>
      </div>
  </body>
</html>
