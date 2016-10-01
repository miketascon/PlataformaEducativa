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
    						<div class="col-md-4 col-sm-12 ">
                            <legend>Imagen de Perfil</legend>


                            <a href="" data-toggle="modal" data-target="#myModal"><img src="?view=obimagen" alt="" width="250" height="250"></a>

                            




                        <div class="modal fade" role="fialog" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Imagen de Perfil</h4>
                                    </div>
                                    <form action="?view=image" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                            
                                   
                                    <input type="file" name="imagen" id="imagen" class="btn-primary form-control" value="Adjuntar"/>
                                                   
                                          

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                         <input type="submit" value="Guardar" class="btn btn-primary"></input>
                                    </div>

                                    </form>
                                 </div>
                                </div>
                            </div>




                                 

                            </div>
    						<form id="formPerfil" class="form-horizontal col-md-7 col-sm-12" action="?view=perfil&mode=edit&id_user=<?php echo $_users[$_SESSION['app_id']]['id_user'];?>" method="POST" onsubmit="return EditPerfil();"  enctype="application/x-www-form-urlencoded">
    							<fieldset>
    								<legend>Datos de usuario</legend>
    								 <div class="form-group">
                        <label for="names" class="col-lg-2 control-label">Nombres</label>
                         <div class="col-lg-10">
                         <div id="_AJAX_NOMBRE_"></div>
                          <input type="text" class="form-control" id="names" name="names" placeholder="" value="<?php echo $_users[$_GET['id_user']]['names']; ?>" pattern="[a-zA-Z áéíóúÁÉÍÓÚÑñ]*">

                         </div>
                    </div>
                    <div class="form-group">
                        <label for="last_names" class="col-lg-2 control-label">Apellidos</label>
                         <div class="col-lg-10">
                         <div id="_AJAX_APELLIDOS_"></div>
                          <input type="text" class="form-control" id="last_names" name="last_names" placeholder="" value="<?php echo $_users[$_GET['id_user']]['last_names']; ?>" pattern="[a-zA-Z áéíóúÁÉÍÓÚÑñ]*">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                         <div class="col-lg-10">
                         <div id="_AJAX_EMAIL_"></div>
                          <input type="Email" name="email" class="form-control" id="email" placeholder="" value="<?php echo $_users[$_GET['id_user']]['email']; ?>">
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
                    
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                    </div>


    							</fieldset>
    						</form>
    						<div class="col-md-1 col-sm-12"></div>
    					</div>
  					</div>
				</div>
			</div>
		</section>



	
<?php include('plantillas/footer.php');?>
</body>
</html>