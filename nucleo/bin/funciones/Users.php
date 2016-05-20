<?php

function Users() {
  $db = new Conexion();

  $query = $db->query("SELECT timer FROM config WHERE id='1' LIMIT 1;");
  $timer = $db->recorrer($query)[0];
  $db->liberar($query);

  $sql = $db->query("SELECT * FROM users;");
  $usuarios_actuales = $db->rows($sql);

  if(!isset($_SESSION['cantidad_usuarios'])) {
    $_SESSION['cantidad_usuarios'] = $usuarios_actuales;
  }

  if($_SESSION['cantidad_usuarios'] != $usuarios_actuales or (time() - 60) <= $timer) {
    while($d = $db->recorrer($sql)) {
      $users[$d['id']] = $d;
    }
  } else {
    if(!isset($_SESSION['users'])) {
      while($d = $db->recorrer($sql)) {
        $users[$d['id']] = $d;
      }
    } else {
      $users = $_SESSION['users'];
    }
  }

  $_SESSION['users'] = $users;

  $db->liberar($sql);
  $db->close();

  return $_SESSION['users'];
}

?>