<div class='w3-bar w3-black'>
<a class='w3-bar-item w3-button' href='index.php'>Inicio</a>
<a class='w3-bar-item w3-button' href='listadeusuarios.php'>Jugadores</a>
<a class='w3-bar-item w3-button' href='registro.php'>registro</a>
<?php
foreach ($resultado as $usuario) {
echo "<a class='w3-bar-item'style='color:red'>Usuario en linea: ".$usuario['nombre']."</a>";
}
echo "</div>";
?>
