<?php


if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 1){


	$db = new Conexion();

  if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){
      $pagina = $_GET['pag'];
  }else{
      $pagina = $_GET['pag'];
  }


 
  $cantidad = $db->query("SELECT COUNT(*) FROM user");
  $result = $db->recorrer($cantidad);
  $result = $result[0];
  $paginado = 5;
  $paginas = ceil($result / $paginado);
  $inicio = ($pagina - 1) * $paginado;

  $db->liberar($cantidad);
  $db->close();




	/*$pagina = isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1 ? $_GET['pag'] : 1;
	$db = new Conexion();
	$cantidad = $db->query("SELECT COUNT(*) FROM user");
	$result = $db->recorrer($cantidad);
	$result = $result[0];
	$paginado = 5;
	$paginas = ceil($result / $paginado);
	$inicio = ($pagina - 1) * $paginado;*/

	$isset_id = isset($_GET['id_user']) and is_numeric($_GET['id_user']) and $_GET['id_user'] >= 1;

	require('nucleo/modelos/class.Usuario.php');
	$usuario = new Usuario();

	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'add':
				if($_POST){
					$usuario->Add();
					header('location: ?view=admin');
				}else{
                   header('location: ?view=admin');
				}
			break;
		case 'edit':
				if($isset_id){
					if($_POST){
						$usuario->Edit();
						header('location: ?view=admin');

					}else{
						include(APP_DIR . 'app/secciones/editUser.php');

					}

				}

			break;
		case 'delete':
				if($isset_id){
					$usuario->Delete();
					header('location: ?view=admin');
				}else{
					header('location: ?view=admin');
				}
			break;

		default:
			header('location: ?view=admin');
			break;
	}



}else{
	header('location: ?view=admin');
}



 ?>
