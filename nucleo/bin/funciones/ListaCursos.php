<?php 

function ListaCursos() {
  $db = new Conexion();

  $sql = $db->query("SELECT * FROM cursos;");
  if($db->rows($sql) > 0){
    while($d = $db->recorrer($sql)){
      $cursos[$d['id_curso']] = array(
           'id_curso' => $d['id_curso'],
           'ficha' => $d['ficha'],
           'nombre' => $d['nombre'],
           'descripcion' => $d['descripcion'],
           'reg_curso' => $d['reg_curso']
                   
        );

    }

  }else{
      $cursos = false;
  }

  

  $db->liberar($sql);
  $db->close();

  return $cursos;
}
 ?>