<?php
/**
 * DB
 */
class Conex
{
  private $servidor="localhost";
  private $bbdd="manolo";
  private $usuario="root";
  private $pass="";
  public $password=null;
  function __construct()
  {
  }
  public function config($servidor,$bbdd,$servidor,$password){
    $this->$servidor=$servidor;
    $this->$bbdd=$bbdd;
    $this->$usuario=$usuario;
    $this->$password=$password;
  }
  public function conectar(){
    $this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->bbdd);
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
    /**
     *
     *
     * @return mixed
     */
    public function getServidor()
    {
        return $this->servidor;
    }
    /**
     *
     *
     * @param mixed
     *
     * @return self
     */
    public function getServidor($servidor)
    {
        $this->servidor = $servidor;
        return $this;
    }
