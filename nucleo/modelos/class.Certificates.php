<?php 
    
    class Certificates(){

    	private $con;
    	private $id_certificates;
    	private $obtained_title;
    	private $img_diploma;
    	private $university;
    	private $id_user;
    	private $fecha_reg;


    	public function __construct(){

		$this->con = new Conexion();	
		}
    	public function get($atributo){
       		return $this->$atributo;
    	}
		public function set($atributo, $contenido){
        	$this->$atributo = $contenido;


        public function Add(){
		$this->onbtained_title = $this->con->real_escape_string($_POST['obtained_title']);
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



    }








?>