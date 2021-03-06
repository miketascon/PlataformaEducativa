<?php 

/*
Nucleo de la aplicación 
Desarrollado @miketascon

*/

session_start();
date_default_timezone_set('America/Bogota');


#Constatntes de la aplicación
define('HTML_DIR', 'html/');//fichero html
define('APP_DIR', 'vistas/');
define('APP_TITLE', 'Educación Creativa'); //nombre de la app
define('APP_COPY', 'Copyright &copy: ' . date('Y',time()) . ' MTsoluctions ');// Derechos de autor
define('APP_URL', 'http//:localhost/PlataformaEducativa'); //url base de la aplicación

#Constantes de conexión
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','Persefone2016');
define('DB_NAME','empresa');

#librerias
require('nucleo/librerias/Zebra_Pagination.php');
require('nucleo/librerias/ez_sql_core.php');
require('nucleo/librerias/ez_sql_mysql.php');



#archivos requeridos
require('vendor/autoload.php');
require('nucleo/modelos/class.Conexion.php');
require('nucleo/bin/funciones/Encrypt.php');
require('nucleo/bin/funciones/Descrypt.php');
require('nucleo/bin/funciones/Users.php');
require('nucleo/bin/funciones/ListaCursos.php');
require('nucleo/bin/funciones/ListaPais.php');






$_pais = ListaPais();
$_users = Users();
$_cursos = ListaCursos();

 ?>