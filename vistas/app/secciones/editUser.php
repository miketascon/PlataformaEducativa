<?php include('plantillas/header.php');?>
<body>
  <?php include('plantillas/topnav.php');?>

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="?view=home">Inicio</a></li>  
            <li class="active"><a href="#">Menu Principal</a></li>
            <li><a href="?view=cursos">Administrar cursos</a></li>
            <li><a href="#">Categoria 2</a></li>
            <li><a href="#">Categoria 3</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Usuarios</h2>
          
            <div class="" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Edicción de usuario</h4>
                </div>
                <div class="modal-body">
                
                   <form id="editUsuario" class="form-horizontal" action="?view=usuario&mode=edit&id_user=<?php echo $_GET['id_user'];?>" method="POST" onsubmit="return EditUser();" enctype="application/x-www-form-urlencoded">
                      <div class="form-group">
                        <label for="names" class="col-lg-2 control-label">Nombres</label>
                         <div class="col-lg-10">
                          <input type="text" class="form-control" id="names" name="names" placeholder="" value="<?php echo $_users[$_GET['id_user']]['names']; ?>" pattern="[a-zA-Z áéíóúÁÉÍÓÚÑñ]*">

                         </div>
                    </div>
                    <div class="form-group">
                        <label for="last_names" class="col-lg-2 control-label">Apellidos</label>
                         <div class="col-lg-10">
                          <input type="text" class="form-control" id="last_names" name="last_names" placeholder="" value="<?php echo $_users[$_GET['id_user']]['last_names']; ?>" pattern="[a-zA-Z áéíóúÁÉÍÓÚÑñ]*">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                         <div class="col-lg-10">
                          <input type="Email" name="email" class="form-control" id="email" placeholder="" value="<?php echo $_users[$_GET['id_user']]['email']; ?>">
                         </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Contraseña</label>
                         <div class="col-lg-10">
                          <input type="password" class="form-control" id="password" name="password" placeholder="" value="<?php echo Descrypt($_users[$_GET['id_user']]['password']) ; ?>">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-lg-2 control-label">Género</label>
                        <div class="col-lg-10">
                        <div id="_AJAX_GENERO_"></div>
                          <select class="form-control" id="gender" name="gender"  >
                              <option value="" disabled selected>Selecciona un valor</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
          
                          </select>
        
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="permisos" class="col-lg-2 control-label">Tipo de usuario</label>
                        <div class="col-lg-10">
                        <div id="_AJAX_PERMISOS_"></div>
                          <select class="form-control" id="permisos" name="permisos" value="<?php echo $_users[$_GET['id_user']]['permisos']; ?>" >
                              <option value="" disabled selected>Selecciona un valor</option>
                              <option value="1">Administrador</option>
                              <option value="2">Estudiante</option>
                              <option value="3">Profesor</option>
          
                          </select>
        
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone" class="col-lg-2 control-label">Teléfono</label>
                         <div class="col-lg-10">
                          <input type="number" class="form-control" name="phone"  id="phone" placeholder="" value="<?php echo $_users[$_GET['id_user']]['phone']; ?>">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="cel_phone" class="col-lg-2 control-label">Celular</label>
                         <div class="col-lg-10">
                          <input type="number" name="cel_phone"  class="form-control" id="cel_phone" placeholder="" value="<?php echo $_users[$_GET['id_user']]['cel_phone']; ?>">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-2 control-label">Dirección</label>
                         <div class="col-lg-10">
                          <input type="text" class="form-control" name="address"  id="address" placeholder="" value="<?php echo $_users[$_GET['id_user']]['address']; ?>">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="names_country" class="col-lg-2 control-label">Pais</label>
                         <div class="col-lg-10">
                          <input type="text" class="form-control" name="names_country"  id="names_country" placeholder="" value="<?php echo $_users[$_GET['id_user']]['names_country']; ?>" pattern="[A-Z ÁÉÍÓÚÑñ]*">
                         </div>
                    </div>

                <div class="modal-footer">
                    <a type="button" href="?view=admin" class="btn btn-default" data-dismiss="modal">Volver</a>
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


<!-- Modal edit-->
<?php include('plantillas/footer.php');?>
</body>
</html>
            