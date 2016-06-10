<?php include('plantillas/header.php');?>

<body>
<?php include('plantillas/topnav.php');?>

	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="?view=home">Inicio</a></li>  
            <li class="active"><a href="#">Menu Principal</a></li>
            <li><a href="?view=admin">Usuarios</a></li>
            <li><a href="#">Categoria 2</a></li>
            <li><a href="#">Categoria 3</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Cursos</h2>
          
          <!-- Modal add-->
			<div class="" id="addCurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel" style="text-align: center;">Agregar Curso</h4>
      					</div>
      						<div class="modal-body">
       							 <form id="regUsuario" class="form-horizontal"  action="?view=cursos&mode=edit&id_curso=<?php echo $_GET['id_curso'];?>" onsubmit="return AjaxCursos();" method="POST" enctype="application/x-www-form-urlencoded">
       							 	<div class="form-group">
      									<label for="ficha" class="col-lg-2 control-label">Ficha</label>
      								   <div class="col-lg-10">
                         <div id="_AJAX_FICHA_"></div>
       								    <input type="text" class="form-control" id="ficha" name="ficha" placeholder="" value="<?php echo $_cursos[$_GET['id_curso']]['ficha']; ?>">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="nombre" class="col-lg-2 control-label">Nombre del curso</label>
      								   <div class="col-lg-10">
                         <div id="_AJAX_NOMBRE_CURSO_"></div>
       								    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo $_cursos[$_GET['id_curso']]['nombre']; ?>">
      								   </div>
    								</div>
                      <div class="form-group">
                        <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                         <div class="col-lg-10">
                          <div id="_AJAX_DESCRIPCION_"></div>
                          <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Vuelve a escribir una descripción" value="<?php echo $_cursos[$_GET['id_curso']]['descripcion']; ?>"></input>
                         </div>
                    </div>
    								
								<div class="modal-footer">
        						<a href="?view=cursos" type="button" class="btn btn-default" data-dismiss="modal">Volver atras</a>
        						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      							</div>
    								

       							 </form>
      						</div>
      					
    				</div>
  				</div>
			</div>



			
           
          
      </div>

      </div>
    </div>  

        
<?php include('plantillas/footer.php');?>
</body>
</html>