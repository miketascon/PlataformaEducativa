<?php
// Conexion a la base de datos
mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());



    $id = $_users[$_SESSION['app_id']]['id_user'];
    // Consulta de búsqueda de la imagen.
    $consulta = "SELECT imagen, tipo_imagen FROM user WHERE id_user='$id'";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);

    $imagen = $datos['imagen']; // Datos binarios de la imagen.
    $tipo = $datos['tipo_imagen'];  // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    header("Content-type: $tipo");
    if($imagen){
         echo $imagen;
    }else{
        include(APP_DIR . 'app/images/usuario-registrado.jpg');
    }
  

?>