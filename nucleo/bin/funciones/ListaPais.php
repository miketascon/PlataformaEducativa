<?php 
function ListaPais() {
  $db = new Conexion();

  $sql = $db->query("SELECT * FROM country ;");
  if($db->rows($sql) > 0){
    while($d = $db->recorrer($sql)){
      $pais[$d['id_country']] = array(
      		'id_country' => $d['id_country'],
            'names_country' => $d['names_country']                 
        );

    }

  }else{
      $pais = false;
  }

  $db->liberar($sql);
  $db->close();

  return $pais;
}

?>