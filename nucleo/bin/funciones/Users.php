<?php

function Users() {
  $db = new Conexion();

  $sql = $db->query("SELECT * FROM user;");
  if($db->rows($sql) > 0){
    while($d = $db->recorrer($sql)){
      $users[$d['id_user']] = array(
           'id_user' => $d['id_user'],
           'names' => $d['names'],
           'last_names' => $d['last_names'],
           'email' => $d['email'],
           'password' => $d['password'],
           'gender' => $d['gender'],
           'id_country' => $d['id_country'],
           'phone' => $d['phone'],
           'cel_phone' => $d['cel_phone'],
           'address' => $d['address'],
           'permisos' => $d['permisos']

        );

    }

  }else{
      $users = false;
  }

  

  $db->liberar($sql);
  $db->close();

  return $users;
}

?>
