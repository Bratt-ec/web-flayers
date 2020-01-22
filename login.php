<?php
session_start();
require_once 'conexion/conexion.php';

$user = $_POST["txtCedula"];
$pass = $_POST["txtClave"];

$conexion = new Conexion();
$consulta = $conexion->prepare('select cedula,clave from usuarios where cedula = "'.$user.'" and clave = "'.$pass.'" and estado=1');
$registros =  $consulta->execute();
// $registros = $consulta->fetch();
if($registros = 1){ 
        $_SESSION['usuario']=$user;
        header('location: flyers.php');
}else{
   header('location: iniciar_sesion.php');
    }


?>
