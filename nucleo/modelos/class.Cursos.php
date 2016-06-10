<?php 

/**
* 
*/
class Cursos{ 

    private $con;
    private $id_curso;
    private $ficha;
    private $nombre;
    private $descripcion;
    private $reg_curso;  
	
	public function __construct(){
		$this->con = new Conexion();
	}
	public function get($atributo){
       	return $this->$atributo;
    }
	public function set($atributo, $contenido){
        $this->$atributo = $contenido;
	}

	public function Add(){
        $this->ficha = $this->con->real_escape_string($_POST['ficha']);
        $this->nombre = $this->con->real_escape_string($_POST['nombre']);
        $this->descripcion = $this->con->real_escape_string($_POST['descripcion']);
        $reg_curso = date('d/m/Y (H:i:s)', time());
        $this->con->query("INSERT INTO cursos (ficha, nombre, descripcion, reg_curso) VALUES ('$this->ficha', '$this->nombre', '$this->descripcion','$reg_curso');");
	}

	public function Edit(){
		$this->id_curso = intval($_GET['id_curso']);
		$this->ficha = $this->con->real_escape_string($_POST['ficha']);
        $this->nombre = $this->con->real_escape_string($_POST['nombre']);
        $this->descripcion = $this->con->real_escape_string($_POST['descripcion']);
        $this->con->query("UPDATE cursos SET ficha='$this->ficha', nombre='$this->nombre', descripcion='$this->descripcion' WHERE id_curso='$this->id_curso';");
	}

	public function delete(){
		$this->id_curso = intval($_GET['id_curso']);
		$this->con->query("DELETE FROM cursos WHERE id_curso='$this->id_curso';");
	}

	public function __destruct(){
		$this->con->close();

	}
}
?>