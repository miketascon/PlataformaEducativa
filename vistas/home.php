<?php 
   
  if(!isset($_SESSION['app_id'])) {
     
            header('location: ?view=index');
       
    }


 ?>

<!DOCTYPE html>



<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
	<link rel="stylesheet" type="text/css" href="vistas/app/css/style.css">
	<link rel="stylesheet" type="text/css" href="vistas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title><?php echo APP_TITLE; ?></title>
</head>
<body>
<header>
  
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Plataforma Educativa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?view=perfil"><?php echo strtoupper($_users[$_SESSION['app_id']]['names']);  ?></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bell text-prymary"></span></a></li>
         <li><a href="#"><span class="glyphicon glyphicon-comment"></span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?view=perfil">Perfil</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="?view=logout">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>

</header>
<section class="jumbotron">
    <div class="container">
      
    </div>
</section>

<section class="main container">
    <div class="row">
      <section class="posts col-md-9">
        <div class="miga-de-pan">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Categorias</a></li>
            <li class="active">Diseño Web</li>
          </ol>
        </div>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
            <img class="img-thumbnail" src="img/img1.jpg" alt="">
          </a>
          <h2 class="post-title">
            <a href="#">Inicia proyectos HTML5 mas rápido con Initializr</a>
          </h2>
          <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#">Carlos Arturo</a></span></p>
          <p class="post-contenido text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <div class="contenedor-botones">
            <a href="#" class="btn btn-primary">Leer Mas</a>
            <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
          </div>
        </article>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
            <img class="img-thumbnail" src="img/img2.jpg" alt="">
          </a>
          <h2 class="post-title">
            <a href="#">Inicia proyectos HTML5 mas rápido con Initializr</a>
          </h2>
          <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#">Carlos Arturo</a></span></p>
          <p class="post-contenido text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <div class="contenedor-botones">
            <a href="#" class="btn btn-primary">Leer Mas</a>
            <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
          </div>
        </article>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
            <img class="img-thumbnail" src="img/img3.jpg" alt="">
          </a>
          <h2 class="post-title">
            <a href="#">Inicia proyectos HTML5 mas rápido con Initializr</a>
          </h2>
          <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#">Carlos Arturo</a></span></p>
          <p class="post-contenido text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <div class="contenedor-botones">
            <a href="#" class="btn btn-primary">Leer Mas</a>
            <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
          </div>
        </article>

        <nav>
          <div class="center-block">
            <ul class="pagination">
              <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo; <span class="sr-only">Siguiente</span></a></li>
            </ul>
          </div>
        </nav>
      </section>

      <aside class="col-md-3 hidden-xs hidden-sm">
        <h4>Categorias</h4>
        <div class="list-group">
          <a href="#" class="list-group-item active">Diseño Web</a>
          <a href="#" class="list-group-item">CSS</a>
          <a href="#" class="list-group-item">Cursos</a>
          <a href="#" class="list-group-item">Desarrollo Web</a>
          <a href="#" class="list-group-item">Elementos Web</a>
          <a href="#" class="list-group-item">Jquery</a>
          <a href="#" class="list-group-item">Recursos y Herramientas</a>
        </div>

        <h4>Articulos Recientes</h4>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Inicia proyectos HTML5 mas rápido con Initializr</h4>
          <p class="list-group-item-text">Aprende como iniciar un proyecto HTML5 en 15 minutos con Initialzr.</p>
        </a>

        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Como hacer una plantilla básica con PHP (templates)</h4>
          <p class="list-group-item-text">LoremAprende como transformar tu diseño web en una plantilla dinámica con PHP.</p>
        </a>

        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Como cambiar el cursor de tu sitio web con propiedad CSS</h4>
          <p class="list-group-item-text">Aprende como cambiar el cursor de los elementos de tu sitio web con CSS.</p>
        </a>
      </aside>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <p>Carlos Arturo - FalconMasters</p>
        </div>
        <div class="col-xs-6">
          <ul class="list-inline text-right">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>










 <script src="vistas/app/js/jquery-1.12.4.min.js"></script>
  <script src="vistas/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
