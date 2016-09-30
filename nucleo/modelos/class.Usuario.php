<?php 
	
class Usuario{

	private $con;
	private $id_user;
	private $names;
	private $last_names;
	private $email;
	private $password;
	private $gender;
	private $permisos;
	private $phone;
	private $cel_phone;
	private $address;
	private $names_country;
	private $imagen;
	private $tipo_imagen;
	private $fecha_reg;


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
		$this->names = $this->con->real_escape_string($_POST['names']);
		$this->last_names = $this->con->real_escape_string($_POST['last_names']);
		$this->email = $this->con->real_escape_string($_POST['email']);
		$this->password = Encrypt($_POST['password']);
		$this->gender = $this->con->real_escape_string($_POST['gender']);		
		$this->permisos = $this->con->real_escape_string($_POST['permisos']);
		$this->phone = $this->con->real_escape_string($_POST['phone']);
		$this->cel_phone = $this->con->real_escape_string($_POST['cel_phone']);
		$this->address = $this->con->real_escape_string($_POST['address']);
		$this->names_country = $this->con->real_escape_string($_POST['names_country']);


		$fecha_reg = date('d/m/Y (H:i:s)', time());

		$sql = $this->con->query("SELECT id_user FROM user WHERE email = '$this->email' LIMIT 1;");
		if( $this->con->rows($sql) == 0){


			$this->con->query("INSERT INTO user(names,last_names,email,password,gender,permisos,phone,cel_phone,address,names_country,fecha_reg)
				VALUES ('$this->names','$this->last_names','$this->email','$this->password','$this->gender','$this->permisos','$this->phone','$this->cel_phone',
				'$this->address','$this->names_country','$fecha_reg');");
		}		 
		
        
		
	} 
	public function Edit(){
		$this->id_user = intval($_GET['id_user']);
		$this->names = $this->con->real_escape_string($_POST['names']);
		$this->last_names = $this->con->real_escape_string($_POST['last_names']);
		$this->email = $this->con->real_escape_string($_POST['email']);
		$this->password = Encrypt($_POST['password']);
		$this->gender = $this->con->real_escape_string($_POST['gender']);
		$this->permisos = $this->con->real_escape_string($_POST['permisos']);
		$this->phone = $this->con->real_escape_string($_POST['phone']);
		$this->cel_phone = $this->con->real_escape_string($_POST['cel_phone']);
		$this->address = $this->con->real_escape_string($_POST['address']);
		$this->names_country = $this->con->real_escape_string($_POST['names_country']);
		$this->con->query("UPDATE user SET names='$this->names', last_names='$this->last_names', email='$this->email', password='$this->password',
			gender='$this->gender', permisos='$this->permisos', phone='$this->phone',cel_phone='$this->cel_phone', address='$this->address', names_country='$this->names_country'
			WHERE id_user='$this->id_user';");

	}

	public function EditPerFil(){
		$this->id_user = intval($_GET['id_user']);
		$this->names = $this->con->real_escape_string($_POST['names']);
		$this->last_names = $this->con->real_escape_string($_POST['last_names']) ;
		$this->email = $this->con->real_escape_string($_POST['email']);
		$this->phone = $this->con->real_escape_string($_POST['phone']);
		$this->cel_phone = $this->con->real_escape_string($_POST['cel_phone']);
		$this->address = $this->con->real_escape_string($_POST['address']);
		$this->names_country = $this->con->real_escape_string($_POST['names_country']);
		$this->con->query("UPDATE user SET names='$this->names', last_names='$this->last_names', email='$this->email', 
			  phone='$this->phone',cel_phone='$this->cel_phone', address='$this->address', names_country='$this->names_country'
			WHERE id_user='$this->id_user';");



	}

	public function EditImg(){
		if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0)
		{
    	echo "Ha ocurrido un error.";
		}
		else
		{
    // Verificamos si el tipo de archivo es un tipo de imagen permitido.
    // y que el tamaño del archivo no exceda los 16MB
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 163840;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)
    {

        // Archivo temporal
        $imagen_temporal = $_FILES['imagen']['tmp_name'];

        // Tipo de archivo
        $tipo = $_FILES['imagen']['type'];

        // Leemos el contenido del archivo temporal en binario.
        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        
        //Podríamos utilizar también la siguiente instrucción en lugar de las 3 anteriores.
        // $data=file_get_contents($imagen_temporal);

        // Escapamos los caracteres para que se puedan almacenar en la base de datos correctamente.
        //$data = mysql_escape_string($data);

        // Insertamos en la base de datos.
        $this->id_user = intval($_GET['id_user']);
        $this->imagen = $this->con->real_escape_string($data);
		$this->tipo_imagen = $this->con->real_escape_string($tipo);

		$this->con->query("UPDATE user SET imagen='$this->imagen', tipo_imagen='$this->tipo_imagen'
			WHERE id_user='$this->id_user';");
       
       
    }
    else
    {
        echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
    }
}
	}

	public function Delete(){
		$this->id_user = intval($_GET['id_user']);
		$this->con->query("DELETE FROM user WHERE id_user='$this->id_user';");
		
	}

	public function __destruct(){
		$this->con->close();
	}
}
     
?>
