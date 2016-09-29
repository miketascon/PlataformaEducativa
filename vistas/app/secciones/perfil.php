<?php include('plantillas/header.php');?>

<body>
<?php include('plantillas/topnav.php');?>

		<section class="main container">
			
			<div class="row">

				<div class="panel panel-primary ">
					 <div class="panel-heading">
   						 <h3 class="panel-title">PERFIL</h3>
  					</div>
  					<div class="panel-body">
    					<div class="row">
    						<div class="col-md-4"></div>
    						<form id="formPerfil" class="form-horizontal col-md-7" action="?view=perfil&mode=edit&id_user=<?php echo $_GET['id_user'];?>" method="POST" onsubmit="return EditUser();" enctype="application/x-www-form-urlencoded">
    							<fieldset>
    								<legend>Datos de usuario</legend>
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
                          <input type="password" class="form-control" id="password" name="password" placeholder="" disabled="true" value="<?php echo Descrypt($_users[$_GET['id_user']]['password']) ; ?>">
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
                    <a type="button" href="?view=home" class="btn btn-default" data-dismiss="modal">Volver</a>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                    </div>


    							</fieldset>
    						</form>
    						<div class="col-md-1"></div>
    					</div>
  					</div>
				</div>
			</div>
		</section>



	
<?php include('plantillas/footer.php');?>
</body>
</html>