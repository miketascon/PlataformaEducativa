<?php 
  

	if(!empty($_POST['user']) and !empty($_POST['pass'])) {
  		$db = new Conexion();
  		$data = $db->real_escape_string($_POST['user']);
  		$pass = Encrypt($_POST['pass']);
  		$sql = $db->query("SELECT id_user FROM user WHERE (cel_phone='$data' OR email='$data') AND password='$pass' LIMIT 1;");
  		
  		if($db->rows($sql) > 0) {
  			if($_POST['sesion']) { ini_set('session.cookie_lifetime', time() + (60*60*24)); }
    		$_SESSION['app_id'] = $db->recorrer($sql)[0];
    		$_SESSION['time_online'] = time() - (60*6); 

    		echo 1;

  			} else {
    			echo '<div class="alert  alert-danger">
    			<button type="button" class="close" data-dismiss="alert">x</button>
    			<strong>  ERROR:</strong> Usuario o contraseña incorrecta.
  				</div>';
  			}
  			$db->liberar($sql);
  			$db->close();
	} else {
  		echo '<div class="alert  alert-danger">
  		<button type="button" class="close" data-dismiss="alert">x</button>
  		<strong>  ERROR:</strong> Debes llenar todos los campos.
		</div>';
	}

?>