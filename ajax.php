<?php 

	if($_POST) {

    	require('nucleo/nucleo.php');

    	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    	case 'login':
      	require('nucleo/bin/ajax/goLogin.php');
           
   		break;
    	case 'reg':
      	require('nucleo/bin/ajax/goReg.php');
    	break;
    	case 'lostpass':
      	//	require('nucleo/bin/ajax/goLostpass.php');
    	break;
    	default:
      		header('location: index.php');
    	break;
   		}
	} else {
  		header('location: index.php');
	}
  
  
 ?>