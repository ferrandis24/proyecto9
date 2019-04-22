<?php
/**
 * Jugador
 */
class Usuario
{
private $conexion=null;
private $nombre;
private $apellidos;
private $curso;
  function __construct()
  {
  }
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["curso"])){
      $error="";
    }elseif($post["nombre"]==""){
      $error="No has introducido el nombre";
    }elseif($post["apellidos"]==""){
      $error="No has introducido el apellido";
    }elseif($post["curso"]==""){
      $error="No has introducido la curso";
    }else {
      $error=false;
      $this->nombre = $post['nombre'];
      $this->apellidos = $post['apellidos'];
      $this->curso = $post['curso'];
    }
    return $error;
    }
    public function conectar(){
      $this->conexion = new mysqli("localhost", "root", "", "manolo");
      if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
      }
  }
   function insertar(){
      $consulta="INSERT INTO usuarios( nombre, apellidos, curso)
                  VALUES ('$this->nombre', '$this->apellidos', '$this->curso')";
      $this->conexion->query($consulta);
  }
  function listarUsuarios(){
     $tabla=$this->conexion->query("SELECT * FROM usuarios");
     return $tabla;
  }
  function nav(){
     $user=$this->conexion->query("SELECT nombre FROM usuarios where id=1");
     return $user;
  }
}
 ?>
