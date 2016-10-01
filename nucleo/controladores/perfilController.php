<?php 
  
  	if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 1){
  		$isset_id = isset($_GET['id_user']) and is_numeric($_GET['id_user']) and $_GET['id_user'] >= 1;

		require('nucleo/modelos/class.Usuario.php');
		$usuario = new Usuario();

		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		
		case 'edit':
				if($isset_id){
					if($_POST){
						$usuario->EditPerFil();
						header('location: ?view=home');

					}else{
						include(APP_DIR . 'app/secciones/perfil.php');

					}

				}

		break;

  	    	default:
			header('location: ?view=home');
			break;
	    }


    }else if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 2){
  		$isset_id = isset($_GET['id_user']) and is_numeric($_GET['id_user']) and $_GET['id_user'] >= 1;

		require('nucleo/modelos/class.Usuario.php');
		$usuario = new Usuario();

		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		
		case 'edit':
				if($isset_id){
					if($_POST){
						$usuario->EditPerfil();
						//header('location: ?view=home');

					}else{
						include(APP_DIR . 'app/secciones/perfil.php');

					}

				}
	

  	    	default:
			header('location: ?view=home');
			break;
	    }

	}else{
		header('location: ?view=home');
	}




 ?>