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
	<link rel="stylesheet" type="text/css" href="vistas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title><?php echo APP_TITLE; ?></title>
</head>