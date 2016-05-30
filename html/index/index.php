<?php 
    
    if(isset($_SESSION['app_id'])) {
     
            header('location: ?view=home');
       
    }

    include(HTML_DIR . '/secciones/header.php'); 

?>
<body>
<?php include(HTML_DIR . '/secciones/topnav.php');            
 	include(HTML_DIR . '/secciones/btnavlat.php'); 
 	include(HTML_DIR . '/secciones/contacto.php'); 
 	include(HTML_DIR . '/secciones/footer.php'); ?>
 
</body>
</html>