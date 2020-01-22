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

</head>

<body id="page-top">
<?php
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

  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">FLYERS</h2>
          <h3 class="section-subheading text-muted">Diferentes Dise&ntilde;os Editables</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Sexy Party</h4>
            <p class="text-muted">Design</p>            
            <p class="text-muted"><input type="hidden" id="Producto1" value="Sexy Party" >
            <input type="submit" class="btn btn-primary" id="btnProducto1" value="Comprar"></p>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Beer Weekends</h4>
            <p class="text-muted">Design</p>
            <p class="text-muted"><input type="hidden" id="Producto2" value="Beer Weekends" >
            <input type="submit" class="btn btn-primary" id="btnProducto2" value="Comprar"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Descontrol</h4>
            <p class="text-muted">Design</p>
            <p class="text-muted"><input type="hidden" id="Producto3" value="Descontrol" >
            <input type="submit" class="btn btn-primary" id="btnProducto3" value="Comprar"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Otro Trago</h4>
            <p class="text-muted">Desing</p>
            <p class="text-muted"><input type="hidden" id="Producto4" value="Otro Trago" >
            <input type="submit" class="btn btn-primary" id="btnProducto4" value="Comprar"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Electro Session</h4>
            <p class="text-muted">Design</p>
            <p class="text-muted"><input type="hidden" id="Producto5" value="Electro Session" >
            <input type="submit" class="btn btn-primary" id="btnProducto5" value="Comprar"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Birthday Party</h4>
            <p class="text-muted">Desing</p>
            <p class="text-muted"><input type="hidden" id="Producto6" value="Birthday Party" >
            <input type="submit" class="btn btn-primary" id="btnProducto6" value="Comprar"></p>
          </div>
        </div>
        
      </div>
      <center>
  <input type="submit" class="btn btn-primary" id="btnCarrito"value="Ver Carrito">
    <center>
    </div>
  </section>
  


    <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">

            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Sexy Party</h2>
                <p class="item-intro text-muted">Sexy Party Design </p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-thumbnail.jpg" alt="">
                <p>¡Diseño perfecto para promocionar una Sexy Party en su discoteca!</p>
                <ul class="list-inline">
                  <li>Fecha: Octubre 2019</li>
                  <li>Cliente: Celos Lounge Bar</li>
                  <li>Categoría: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Beer Weekends</h2>
                <p class="item-intro text-muted">Bar Weekends Design </p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-thumbnail.jpg" alt="">
                <p>Ilustración ideal para promocionar una fiesta tipo October Fest ¡Una fiesta con mucha Cerveza!</p>
                <ul class="list-inline">
                <li>Fecha: Noviembre 2019</li>
                <li>Cliente: Celos Lounge Bar</li>
                <li>Categoría: Diseño Gráfico</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Descontrol</h2>
                <p class="item-intro text-muted">Descontrol Design</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-thumbnail.jpg" alt="">
                <p>Si quieres promocionar una Party Descontrol ¡Este es tu diseño! </p>
                <ul class="list-inline">
                <li>Fecha: Diciembre 2019</li>
                  <li>Cliente: Celos Lounge Bar</li>
                  <li>Categoría: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Otro Trago</h2>
                <p class="item-intro text-muted">Otro Trago Design</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-thumbnail.jpg" alt="">
                <p>¡Flayer ideal para promocionar un fiesta de viernes con Baile y Bebidas!</p>
                <ul class="list-inline">
                  <li>Fecha: Noviembre 2019</li>
                  <li>Cliente: Celos Lounge Bar</li>
                  <li>Categoría: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Electro Session</h2>
                <p class="item-intro text-muted">Electro Session Design</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-thumbnail.jpg" alt="">
                <p>Ilustración ideal para promocionar una fiesta con música electrónica</p>
                <ul class="list-inline">
                <li>Fecha: Abril 2019</li>
                <li>Cliente: Celos Lounge Bar</li>
                <li>Categoría: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                 Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Birthday Party</h2>
                <p class="item-intro text-muted">Birthday Party Design</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-thumbnail.jpg" alt="">
                <p>Promocional perfecto para una fiesta de cumpleaños</p>
                <ul class="list-inline">
                  <li>Fecha: Julio 2019</li>
                  <li>Cliente: Antonio Williams</li>
                  <li>Categoría: Flayer</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
