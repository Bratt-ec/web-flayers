<?php
session_start();

require_once "../clases/clase_usuario.php";
require_once '../clases/clase_productos.php';

$objUsuario = new clsUsuario();
$objProducto =  new clsProductos();
$cedula = $_SESSION['usuario'];

switch ($_GET["op"]){

case 'comprar':
    $val  = $objUsuario->validar_compra($_POST['txtcedula']);
    $bol = (int) $val['compra'];
    if($bol == 1){
        echo 2;
    }
    else{
    $objProducto->cedula= $_POST['txtcedula'];
    $objProducto->total=$_POST['txttotal'];            
    $objProducto->registrar_compra($_POST['txtcedula']);    
    echo $objProducto->compra($_POST['txtcedula'],$_POST['txttotal']);
    }
break;

case 'registrar':
    $objUsuario->cedula = trim($_POST["txtCedula"]);
    $objUsuario->nombre = trim($_POST["txtNombre"]);
    $objUsuario->apellido = trim($_POST["txtApellido"]);
    $objUsuario->edad = trim($_POST["txtEdad"]);
    $objUsuario->clave = trim($_POST["txtClave"]);

    echo $objUsuario->registrar_usuario();
break;

case 'carrito1':
    $prod = $_POST['Producto1'];
    $resultado = $objProducto->validar_carrito($cedula, $prod);
    if(count($resultado) == 0){ 
        $result = $objProducto->precio_producto($_POST['Producto1']);
        $precio = (double) $result['precio'];
        $objProducto->cedula=$cedula;
        $objProducto->producto=$_POST['Producto1'];
        $objProducto->total=$precio;
        echo $objProducto->carrito();    
    }else
        echo 2;
    
break;

case 'carrito2':
    $resultado = $objProducto->validar_carrito($cedula,$_POST['Producto2']);
    if(count($resultado) == 0){ 
    $result = $objProducto->precio_producto($_POST['Producto2']);
    $precio = (double) $result['precio'];
    $objProducto->cedula=$cedula;
    $objProducto->producto=$_POST['Producto2'];
    $objProducto->total=$precio;
    echo $objProducto->carrito();    }
    else
    echo 2;
break;

case 'carrito3':
    $resultado = $objProducto->validar_carrito($cedula,$_POST['Producto3']);
    if(count($resultado) == 0){ 
    $result = $objProducto->precio_producto($_POST['Producto3']);
    $precio = (double) $result['precio'];
    $objProducto->cedula=$cedula;
    $objProducto->producto=$_POST['Producto3'];
    $objProducto->total=$precio;
    echo $objProducto->carrito();    }
    else 
    echo 2;
break;


case 'carrito4':
    $resultado = $objProducto->validar_carrito($cedula,$_POST['Producto4']);
    if(count($resultado) == 0){ 
    $result = $objProducto->precio_producto($_POST['Producto4']);
    $precio = (double) $result['precio'];
    $objProducto->cedula=$cedula;
    $objProducto->producto=$_POST['Producto4'];
    $objProducto->total=$precio;
    echo $objProducto->carrito();    }
    else
    echo 2;
break;

case 'carrito5':
    $resultado = $objProducto->validar_carrito($cedula,$_POST['Producto5']);
    if(count($resultado) == 0){ 
    $result = $objProducto->precio_producto($_POST['Producto5']);
    $precio = (double) $result['precio'];
    $objProducto->cedula=$cedula;
    $objProducto->producto=$_POST['Producto5'];
    $objProducto->total=$precio;
    echo $objProducto->carrito();    }
    else 
    echo 2;
break;

case 'carrito6':
    $resultado = $objProducto->validar_carrito($cedula,$_POST['Producto6']);
    if(count($resultado) == 0){ 
    $result = $objProducto->precio_producto($_POST['Producto6']);
    $precio = (double) $result['precio'];
    $objProducto->cedula=$cedula;
    $objProducto->producto=$_POST['Producto6'];
    $objProducto->total=$precio;
    echo $objProducto->carrito();    }
    else
    echo 2;
break;

}
?>