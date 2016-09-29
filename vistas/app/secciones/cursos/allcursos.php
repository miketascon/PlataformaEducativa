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
          <ul class="list-inline ">
          	<li><a href="?view=cursos&mode=add" type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> Nuevo Curso</a></li>
           	
          </ul>
          <!-- Modal add-->
			<div class="modal fade" id="addCurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel" style="text-align: center;">Agregar Curso</h4>
      					</div>
      						<div class="modal-body">
       							 <form id="regUsuario" class="form-horizontal" action="?view=cursos&mode=add" onsubmit="return AjaxCursos();" method="POST" enctype="application/x-www-form-urlencoded" >
       							 	<div class="form-group">
      									<label for="ficha" class="col-lg-2 control-label">Ficha</label>
      								   <div class="col-lg-10">
                         <div id="_AJAX_FICHA_"></div>
       								    <input type="text" class="form-control" id="ficha" name="ficha" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="nombre" class="col-lg-2 control-label">Nombre del curso</label>
      								   <div class="col-lg-10">
                         <div id="_AJAX_NOMBRE_CURSO_"></div>
       								    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" pattern="[a-zA-Z áéíóúÁÉÍÓÚÑñ]*">
      								   </div>
    								</div>
                      <div class="form-group">
                        <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                         <div class="col-lg-10">
                         <div id="_AJAX_DESCRIPCION_"></div>
                          <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder=""></textarea>
                         </div>
                    </div>
    								
								<div class="modal-footer">
        						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      							</div>
    								

       							 </form>
      						</div>
      					
    				</div>
  				</div>
			</div>



			
           
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr class="danger" >
                  <th style="width: 25%;" >ficha</th>
                  <th style="width: 25%;">cursos</th>
                  <th style="width: 25%;">Descripción</th>                 
                  <th style="width: 5%;">Editar</th>
                  <th style="width: 5%;">Eliminar</th>
                </tr>
              </thead>
              <tbody >
              <?php   
              $conn = new ezSQL_mysql(DB_USER, DB_PASS, DB_NAME);
              $total_cursos = $conn->get_var('SELECT count(*) FROM cursos');
              $resultados   = 10;
              $paginacion = new Zebra_Pagination();
              $paginacion->records($total_cursos);
              $paginacion->records_per_page($resultados);
              // Quitar ceros en numeros con 1 digito en paginacion
              $paginacion->padding(false);
              $lista_cursos = $conn->get_results('SELECT * FROM cursos LIMIT ' . (($paginacion->get_page() - 1) * $resultados) . ', ' . $resultados);



              	foreach ($lista_cursos as $cursos) {

              		echo '<tr >
                  			<td>' . $cursos->ficha . '</td>
                 		 	  <td>' . $cursos->nombre . '</td>
                 		 	  <td>' . $cursos->descripcion . '</td>
                 		 	
                  		 	
                 		 	<td><a href="?view=cursos&mode=edit&id_curso='.$cursos->id_curso.'" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>  </td> 
                 		 	<td> <a href="#" class="btn btn-danger" onclick="DeleteItem(\'¿Está seguro de eliminar este usuario?\',\'?view=cursos&mode=delete&id_curso='.$cursos->id_curso.'\')"><span class="glyphicon glyphicon-trash"></span></a> </td>
                      
                 		 	             		
                			</tr>';
              	}
              ?>

                
              </tbody>
            </table>
            <div class="center"> <?php $paginacion->render(); ?></div>
          </div>
        </div>

      </div>
    </div>  

        
<?php include('plantillas/footer.php');?>
</body>
</html>