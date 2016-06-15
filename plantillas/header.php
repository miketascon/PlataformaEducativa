<?php 
   
  if(!isset($_SESSION['app_id'])) {
     
            header('location: ?view=index');
       
    }


 ?>

<!DOCTYPE html>



<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
	<link rel="stylesheet" type="text/css" href="vistas/app/css/style.css">
	<link rel="stylesheet" type="text/css" href="vistas/app/css/jquery-ui.min.css">
	<link rel="Shortcut Icon" type="image/x-icon" href="vistas/app/assets/img/book.png" />


	<link rel="stylesheet" type="text/css" href="vistas/app/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" type="text/css" href="vistas/app/css/jquery-ui.structure.min.css">
	<link rel="stylesheet" type="text/css" href="vistas/app/css/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="vistas/app/css/hint.min.css">
	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="vistas/bootstrap/css/bootstrap.min.css">
	<link href="vistas/app/css/styleIcomoon.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<script type="text/javascript" src="vistas/app/js/generales.js"></script>
	<?php if($_users[$_SESSION['app_id']]['permisos'] == 1){
                   echo '<link rel="stylesheet" type="text/css" href="vistas/app/css/admin.css">';
            }else{
            	echo '<link rel="stylesheet" type="text/css" href="vistas/app/css/styleHome.css">';
            } ?>
    
    <title><?php echo APP_TITLE; ?></title>
</head>