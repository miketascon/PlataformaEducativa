<?php 



	require('nucleo/nucleo.php');
  

  	if(isset($_GET['view'])){
    	if(file_exists('nucleo/controladores/' . strtolower($_GET['view']) . 'Controller.php')){

      		include('nucleo/controladores/' . strtolower($_GET['view']) . 'Controller.php');

    	}else{

      		include('nucleo/controladores/errorController.php');
    	}

  	}else{
    	include('nucleo/controladores/indexController.php');
  	}


 ?>