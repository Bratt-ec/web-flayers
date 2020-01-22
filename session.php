<?php
//Inicia la session
session_start();
//Compruaba si está vacia
if(isset($_SESSION['usuario'])){
 

}else{
    //si está vaicia, envia al login
  header("location: iniciar_sesion.php");
}
?>