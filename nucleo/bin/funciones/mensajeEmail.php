<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
 
$mensaje .= "telefono: " . $_POST['telefono'] . " \r\n";
$mensaje .= "email: " . $_POST['email'] . " \r\n";
$mensaje .= "mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'viejo.miken@gmail.com';
$asunto = 'Cliente'  ;

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location: index.html');

?>