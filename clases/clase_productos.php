<?php
require_once '../conexion/conexion.php';
Class clsProductos {

    Public $cedula;
    Public $producto;   
    Public $total;
    const TABLA2 = 'compras';
    const carrito = 'carrito';
    
    public function comprar($cedula,$total){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('INSERT INTO compras_totales(cedula, total) VALUES('.$cedula.','.$total.')');
        //  
        return  $consulta->execute();
    }

    public function registrar_compra($cedula){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('UPDATE usuarios set compra = 1 where cedula = "'.$cedula.'" ');
        $consulta->bindParam(':cedula', $this->cedula, PDO::PARAM_STR);    
        return  $consulta->execute();
    }

    
public function compra($ced,$tot){
    $conexion = new Conexion();
    $consulta = $conexion->prepare('INSERT INTO compras_totales(cedula,total) VALUES("'.$ced.'","'.$tot.'")');
    return $consulta->execute();
  }
   
    public function carrito(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::carrito .' ( cedula, producto, precio) VALUES(:cedula,:producto, :total)');        
        $consulta->bindParam(':cedula', $this->cedula, PDO::PARAM_STR);
        $consulta->bindParam(':producto', $this->producto, PDO::PARAM_STR);
        $consulta->bindParam(':total', $this->total, PDO::PARAM_INT);
        return  $consulta->execute();
    }

    public function precio_producto($product){
        $conexion =  new Conexion();
        $consulta =  $conexion->prepare('Select precio from productos where producto = "' . $product. '";');
        $consulta->execute();
        $registros = $consulta->fetch();
        return $registros; 
    }

    public function validar_carrito($cedula,$product){
        $conexion =  new Conexion();
        $consulta =  $conexion->prepare('Select * from carrito where cedula= "'.$cedula.'" and producto = "' . $product. '" ;');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        return $registros; 
    }

}

?>