<?php 

  $db = new Conexion();
  $firstname = $db->real_escape_string($_POST['first_name']);
  $lastname = $db->real_escape_string($_POST['last_name']);
  $email = $db->real_escape_string($_POST['email']);
  $pass = Encrypt($_POST['password']);
  $genero = $db->real_escape_string($_POST['genero']);

  $sql = $db->query("SELECT id_user FROM user WHERE email = '$email' LIMIT 1;");
  if($db->rows($sql) == 0){
  	$db->query("INSERT INTO user (names, last_names, email, password, gender, permisos) VALUES ('$firstname', '$lastname', '$email', '$pass', '$genero', 2);");

  	echo 1;

  }else{

  	echo '<div class="alert  alert-danger">
  	
  		<strong>  ERROR:</strong> El email ya existe en la base de datos!
		</div>';

  }

  $db->liberar(sql);
  $db->close();

 ?>