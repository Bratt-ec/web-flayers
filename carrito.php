
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Flyers | Compra</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link href="css/tablas.css" real="stylesheet">
</head>

<body id="page-top">
<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'conexion/conexion.php';
include ('session.php');

$cedula = $_SESSION['usuario'];
$conexion =  new Conexion();
$consulta =  $conexion->prepare('Select compra from usuarios where cedula= "'.$cedula.'";');
$consulta->execute();
$registros = $consulta->fetch();

$bol = (int) $registros['compra'];
    if($bol == 1){
      header("location: mensaje.php");
    }
    else{
    
    }

?>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">INICIO FLYER</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="flyers.php">Flyers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php #about">Qui&eacute;nes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php #team">Dise&ntilde;ador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php #contact">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Portfolio Grid -->
  <div style="height:100px;"></div>
<section class="bg-light page-section" id="portfolio">
    <div class="container">
    <h2>Carrito de Compras</h2>
    <?php
    $cedula = $_SESSION['usuario'];
    $cantidad = 1; 
    $conexion = new Conexion();
    $consulta = $conexion->prepare('select cedula, producto, precio from carrito where cedula = "'.$cedula.'" ');
    $consulta->execute();
    $registros = $consulta->fetchAll();
  echo "<table class='table'>
  <thead class='thead-dark'>      
  <tr>
          <th>Cédula</th>
          <th>Diseño</th>
          <th>Precio</th>
        </tr>
  </thead>
  <tbody>
  ";     
    foreach ($registros as $datos){
      echo "   <tr>";
      echo "<td>".$datos['cedula']."</td>";
      echo "<td>".$datos['producto']."</td>";
      echo "<td>".$datos['precio']."</td>";
      echo "</tr>";
      $total += $datos['precio'];
    }       
    ?>
    <tr>
    <td>------</td>
    <td><b>Total a pagar:</b></td>
    <td> <?php  echo "$".$total; ?> </td>
    </tr>
    <tr>
    <td> <input type=hidden id="txttotal" value="<?php echo $total; ?>"></td>
    <td> <input type=hidden id="txtcedula" value="<?php echo $cedula; ?>"></td>
    <td><input type="submit" class="btn btn-primary" id="btnComprar" value="Comprar"></td>
    </tr>
    </tbody>
    </table>
    
    
  

    </div>
</section>


<div style="height:200px;"></div>


  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Webflyer Ruben Pineda 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">         
          <li class="list-inline-item">
              <a href="#">Pol&iacute;tica de Privacidad</a>
            </li>
            <li class="list-inline-item">
              <a href="#">T&eacute;rminos de Uso</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="funciones/funciones.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
