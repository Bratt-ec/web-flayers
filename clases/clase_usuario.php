<?php
require_once '../conexion/conexion.php';
class clsUsuario{
    //atributos
    Public $cedula;
    Public $nombre;
    Public $apellido;
    Public $edad;
    Public $clave;
    const TABLA = 'usuarios';


    //Métodos
    public function registrar_usuario(){
    $conexion = new Conexion();
    $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (cedula,nombre,apellido,edad,clave) VALUES(:cedula,:nombre,:apellido,:edad,:clave)');
    $consulta->bindParam(':cedula', $this->cedula, PDO::PARAM_STR);
    $consulta->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
    $consulta->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
    $consulta->bindParam(':edad', $this->edad, PDO::PARAM_INT);
    $consulta->bindParam(':clave', $this->clave, PDO::PARAM_STR);    
  	return $consulta->execute();
    }

    

  public function validar_compra($cedula){
    $conexion =  new Conexion();
    $consulta =  $conexion->prepare('Select compra from usuarios where cedula= "'.$cedula.'";');
    $consulta->execute();
    $registros = $consulta->fetch();
    return $registros; 
}


}
?>