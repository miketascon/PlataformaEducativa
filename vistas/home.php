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
    <title><?php echo APP_TITLE ?></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
        <button type="submit" class="btn btn-default">
        	<span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo strtoupper($_users[$_SESSION['app_id']]['names']);  ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->


</nav>






 <script src="vistas/app/js/jquery-1.12.4.min.js"></script>
  <script src="vistas/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
