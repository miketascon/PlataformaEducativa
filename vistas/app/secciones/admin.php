<?php include('plantillas/header.php');?>

<body>
<?php include('plantillas/topnav.php');?>

	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="?view=home">Inicio</a></li>  
            <li class="active"><a href="#">Menu Principal</a></li>
            <li><a href="#">Administrar cursos</a></li>
            <li><a href="#">Categoria 2</a></li>
            <li><a href="#">Categoria 3</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Usuarios</h2>
          <ul class="list-inline ">
          	<li><a href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#addUsuario"><span class="glyphicon glyphicon-user"></span> Nuevo Usuario</a></li>
           	
          </ul>
          <!-- Modal add-->
			<div class="modal fade" id="addUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel" style="text-align: center;">Agregar usuario</h4>
      					</div>
      						<div class="modal-body">
       							 <form id="regUsuario" class="form-horizontal" action="?view=usuario&mode=add" method="POST" enctype="application/x-www-form-urlencoded">
       							 	<div class="form-group">
      									<label for="names" class="col-lg-2 control-label">Nombres</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" id="names" name="names" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="last_names" class="col-lg-2 control-label">Apellidos</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" id="last_names" name="last_names" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="email" class="col-lg-2 control-label">Email</label>
      								   <div class="col-lg-10">
       								    <input type="Email" name="email" class="form-control" id="email" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="password" class="col-lg-2 control-label">Contraseña</label>
      								   <div class="col-lg-10">
       								    <input type="password" name="password"  class="form-control" id="password" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="gender" class="col-lg-2 control-label">Género</label>
      									<div class="col-lg-10">
        									<select class="form-control" id="gender " name="gender" >
          										<option value="Masculino">Masculino</option>
          										<option value="Femenino">Femenino</option>
          
        									</select>
        
      									</div>
      								</div>
      								<div class="form-group">
      									<label for="permisos" class="col-lg-2 control-label">Tipo de usuario</label>
      									<div class="col-lg-10">
        									<select class="form-control" id="permisos" name="permisos" >
          										<option value="1">Administrador</option>
          										<option value="2">Estudiante</option>
          										<option value="3">Profesor</option>
          
        									</select>
        
      									</div>
      								</div>
      								<div class="form-group">
      									<label for="phone" class="col-lg-2 control-label">Teléfono</label>
      								   <div class="col-lg-10">
       								    <input type="number" class="form-control" name="phone"  id="phone" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="cel_phone" class="col-lg-2 control-label">Celular</label>
      								   <div class="col-lg-10">
       								    <input type="number" name="cel_phone"  class="form-control" id="cel_phone" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="address" class="col-lg-2 control-label">Dirección</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" name="address"  id="address" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="id_country" class="col-lg-2 control-label">Pais</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" name="id_country"  id="id_country" placeholder="">
      								   </div>
    								</div>
								<div class="modal-footer">
        						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      							</div>
    								

       							 </form>
      						</div>
      					
    				</div>
  				</div>
			</div>

			<!-- Modal edit-->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
      					</div>
      					<div class="modal-body">
      						 <form id="regUsuario" class="form-horizontal" action="?view=usuario&mode=edit&id=<?php echo $_GET['id']?>" method="POST" enctype="application/x-www-form-urlencoded">
       							 	<div class="form-group">
      									<label for="names" class="col-lg-2 control-label">Nombres</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" id="names" name="names" placeholder="" value="<?php echo $_users[$_GET['id']]['names']; ?>">

      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="last_names" class="col-lg-2 control-label">Apellidos</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" id="last_names" name="last_names" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="email" class="col-lg-2 control-label">Email</label>
      								   <div class="col-lg-10">
       								    <input type="Email" name="email" class="form-control" id="email" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="password" class="col-lg-2 control-label">Contraseña</label>
      								   <div class="col-lg-10">
       								    <input type="password" name="password"  class="form-control" id="password" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="gender" class="col-lg-2 control-label">Género</label>
      									<div class="col-lg-10">
        									<select class="form-control" id="gender " name="gender" >
          										<option value="Masculino">Masculino</option>
          										<option value="Femenino">Femenino</option>
          
        									</select>
        
      									</div>
      								</div>
      								<div class="form-group">
      									<label for="permisos" class="col-lg-2 control-label">Tipo de usuario</label>
      									<div class="col-lg-10">
        									<select class="form-control" id="permisos" name="permisos" >
          										<option value="1">Administrador</option>
          										<option value="2">Estudiante</option>
          										<option value="3">Profesor</option>
          
        									</select>
        
      									</div>
      								</div>
      								<div class="form-group">
      									<label for="phone" class="col-lg-2 control-label">Teléfono</label>
      								   <div class="col-lg-10">
       								    <input type="number" class="form-control" name="phone"  id="phone" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="cel_phone" class="col-lg-2 control-label">Celular</label>
      								   <div class="col-lg-10">
       								    <input type="number" name="cel_phone"  class="form-control" id="cel_phone" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="address" class="col-lg-2 control-label">Dirección</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" name="address"  id="address" placeholder="">
      								   </div>
    								</div>
    								<div class="form-group">
      									<label for="id_country" class="col-lg-2 control-label">Pais</label>
      								   <div class="col-lg-10">
       								    <input type="text" class="form-control" name="id_country"  id="id_country" placeholder="">
      								   </div>
    								</div>
								<div class="modal-footer">
        						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      							</div>
    								

       							 </form>
        
      					</div>
      					
    				</div>
  				</div>
			</div>

			<!-- Modal delete-->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel">ELIMINAR</h4>
      					</div>
      					<div class="modal-body">
                             <h5>¿Desea eliminar el usuario?</h5>
      					</div>
      					<div class="modal-footer">
      					<?php 

      						echo'<form action="?view=usuario&mode=delete&id=' . $_users[$id_user]['id_user'] . ' method="POST" enctype="application/x-www-form-urlencoded" ><button type="submit" class="btn btn-danger" ">SI</button>';
      					 ?> 
      					  			
        					
        					<button type="button" class="btn btn-default" data-dismiss="modal">No</button></form>
      					</div>
    				</div>
  				</div>
			</div>
           
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr class="danger" >
                  <th style="width: 25%;" >Nombres</th>
                  <th style="width: 25%;">Apellidos</th>
                  <th style="width: 5%;">Email</th>
                  <th style="width: 10%;">Celular</th>
                  <th style="width: 5%;">Dirección</th>
                  <th style="width: 5%;">Editar</th>
                  <th style="width: 5%;">Eliminar</th>
                </tr>
              </thead>
              <tbody >
              <?php   
              	foreach ($_users as $id_user => $usuarios_array) {
              		echo ' 	<tr >
                  			<td>' . $_users[$id_user]['names'] . '</td>
                 		 	<td>' . $_users[$id_user]['last_names'] . '</td>
                 		 	<td>' . $_users[$id_user]['email'] . '</td>
                 		 	<td>' . $_users[$id_user]['cel_phone'] . '</td> 
                 		 	<td>' . $_users[$id_user]['address'] . '</td> 
                  		 	
                 		 	<td><a href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></a>  </td> 
                 		 	<td> <a href="#" class="btn btn-danger" onclick="DeleteItem(\'¿Está seguro de eliminar esta categoría?\',\'?view=usuario&mode=delete&id_user='.$_users[$id_user]['id_user'].'\')"><span class="glyphicon glyphicon-trash"></span></a> </td>
                 		 	             		
                			</tr>';
              	}
              ?>

                
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>  

        
<?php include('plantillas/footer.php');?>
</body>
</html>