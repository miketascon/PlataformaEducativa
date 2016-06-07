<?php


if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 1){

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
				if($isset_id and array_key_exists($_GET['id_user'],$_users)){
					if($_POST){
						$usuario->Edit();
						header('location: ?view=admin');
					}else{
						header('location: ?view=admin');
					}
						
				}else{
					header('location: ?view=admin');
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
			# code...
			break;
	}



}else{
	header('location: ?view=admin');
}



 ?>