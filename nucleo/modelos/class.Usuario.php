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
		$this->last_names = $this->con->real_escape_string($_POST['last_names']);
		$this->email = $this->con->real_escape_string($_POST['email']);
		$this->password = Encrypt($_POST['password']);
		$this->gender = $this->con->real_escape_string($_POST['gender']);
		$this->permisos = $this->con->real_escape_string($_POST['permisos']);
		$this->phone = $this->con->real_escape_string($_POST['phone']);
		$this->cel_phone = $this->con->real_escape_string($_POST['cel_phone']);
		$this->address = $this->con->real_escape_string($_POST['address']);
		$this->names_country = $this->con->real_escape_string($_POST['names_country']);
		$this->con->query("UPDATE user SET names='$this->names', last_names='$this->last_names', email='$this->email', 
			  phone='$this->phone',cel_phone='$this->cel_phone', address='$this->address', names_country='$this->names_country'
			WHERE id_user='$this->id_user';");



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
