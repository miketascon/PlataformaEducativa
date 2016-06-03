<?php 

  $db = new Conexion();
  $firstname = $db->real_escape_string($_POST['first_name']);
  $lastname = $db->real_escape_string($_POST['last_name']);
  $email = $db->real_escape_string($_POST['email']);
  $pass = Encrypt($_POST['password']);
  $genero = $db->real_escape_string($_POST['genero']);

  $sql = $db->query("SELECT id_user FROM user WHERE email = '$email' LIMIT 1;");
  if($db->rows($sql) == 0){
    $fecha_reg = date('d/m/Y (H:i:s)', time());
  	$db->query("INSERT INTO user (names, last_names, email, password, gender, permisos, fecha_reg) VALUES ('$firstname', '$lastname', '$email', '$pass', '$genero', 2, '$fecha_reg');");
    $sql_2 = $db->query("SELECT MAX(id_user) AS id_user FROM user;");
    $_SESSION['app_id'] = $db->recorrer($sql_2)[0];
    $db->liberar($sql_2);
  	echo 1;

  }else{

  	echo '<div class="alert  alert-danger"> 	
  		  <strong>  ERROR:</strong> El email ya existe en la base de datos!
		    </div>';

  }

  $db->liberar($sql);
  $db->close();

 ?>