<?php 
	

	if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 1){
		$isset_id = isset($_GET['id_curso']) and is_numeric($_GET['id_curso']) and $_GET['id_curso'] >= 1;

		require('nucleo/modelos/class.Cursos.php');
		$cursos = new Cursos();

		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
			case 'add':
				if($_POST){
					$cursos->Add();
					header('location: ?view=cursos');

				}else{
					include(APP_DIR . 'app/secciones/cursos/addCursos.php');

				}
				break;
			case 'edit':
				if($isset_id){
					if($_POST){
						$cursos->Edit();
						header('location: ?view=cursos');
					}else{
						include(APP_DIR . 'app/secciones/cursos/editcursos.php');
					}					
				}
				break;
			case 'delete':
				if($isset_id){
					$cursos->delete();
					header('location: ?view=cursos');
				}else{
					header('location: ?view=cursos');
				}
				break;
			
			default:
				include(APP_DIR . 'app/secciones/cursos/allcursos.php');
				break;
		}

	}else{
       header('location: ?view=cursos');
	}
	
 ?>