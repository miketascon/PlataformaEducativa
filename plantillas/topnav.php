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
      <a class="navbar-brand" href="?view=home">Educación Creativa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info hint--bottom  hint--rounded" aria-label="Buscar Curso">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?view=perfil" class="hint--bottom  hint--rounded" aria-label="Ver perfil"><span class="text-color-icon"><?php echo strtoupper($_users[$_SESSION['app_id']]['names']);  ?></span></a></li>
        <li><a href="#" class="hint--bottom  hint--rounded" aria-label="Notificaciones"><span class=" glyphicon glyphicon-bell text-color-icon" ><small class="small ">75</small></span></a></li>
         <li><a href="#" class="hint--bottom  hint--rounded" aria-label="Mensajes"><span class="glyphicon glyphicon-comment text-color-icon "><small class="small">5</small></span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle hint--bottom  hint--rounded" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-label="Menu de usuario"><span class="glyphicon glyphicon-user text-color-icon"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?view=perfil">Perfil</a></li>
            <?php 
                if($_users[$_SESSION['app_id']]['permisos'] == 1){

                   echo '<li><a href="?view=admin">Administrar</a></li>';

                }

             ?>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li  ><a href="?view=logout" class=" "><span class="glyphicon glyphicon-off  text-color-salir"> Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>

</header>
<div class="content-page-container full-reset custom-scroll-containers ">

<?php if($_users[$_SESSION['app_id']]['permisos'] > 1){
                   echo '<section class="jumbotron">
                        <div class="container">
                         <h3 class="info"><marquee class=" " behavior="left">Aqui va ir una variable para mostrar informacion deseada y esto es solo la prueba de como funcionara este dato</marquee></h3>
                        </div>
                        </section>';
      } ?>
