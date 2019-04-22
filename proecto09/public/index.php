<?php
require "./../src/conex.php";
require "../src/Usuario.php";
  $j=new Usuario();
  $j->conectar();
  $resultado=$j->nav();

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div id="nav"><?php include "assets/navSup.php"; ?></div>

<br>
			Siguiente fila
      <input type="text" id="fila" value="">
      Siguiente columna
      <input type="text" id="columna" value="">
      <button type="button" name="button" onclick="comprobarMovimiento()">Comprobar movimiento</button>
      <br><br>
      Movimientos realizados
      <input type="text" id="movimientosRealizados1" value="" disabled=”disabled” >
      Num movimientos
      <input type="text" id="numMovimientos" value="" disabled=”disabled”>
      <br><br>
      Mensajes
      <input type="text" id="mensajes" value="" disabled=”disabled”>
     <script type="text/javascript" src="js/tablero.js">
     </script>
         <div id="footer"><?php include "assets/footer.php"; ?></div>
	 </body>
 </html>
