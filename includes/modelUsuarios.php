<?php
if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
} 

class usuarios{
	
    private $id_user;
    private $username;
	private $password;
    private $email;
    private $nombre_tienda;
    private $descripcion_tienda;
    private $telefono;

    private $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli('127.0.0.1', 'root', '', 'grupo1'); //inicializo
	}

    public function set_username($username){
            $this->username = $username;
    }

    public function set_password($password){
            $this->password = $password;
    }

    public function set_email($email){
            $this->email = $email;
    }

    public function set_telefono($telefono){
            $this->telefono = $telefono;
    }

    public function set_descripcion_tienda($descripcion){
            $this->descripcion_tienda = $descripcion;
    }

    public function set_nombre_tienda($nombre_tienda){
            $this->nombre_tienda = $nombre_tienda;
    }

    public function autenticate($us, $pw){
        $query="SELECT * FROM usuarios WHERE username='".$us."' AND password='".$pw."'";
        if ( $resultado = $this->mysqli->query($query) ){
                // setea todos los valores en la clase
                $fila = mysqli_fetch_assoc($resultado);
                //print_r($fila);
                $this->id_user = $fila['id_user'];
                $this->username = $fila['username'];
                $this->email = $fila['email'];
                $this->nombre_tienda = $fila['nombre_tienda'];
                $this->descripcion_tienda = $fila['descripcion_tienda'];
                $this->telefono = $fila['telefono'];                
                return true;
		}else{
                return false;
        }
    }

    public function save(){
        $sql="INSERT INTO usuarios(username, password, email, nombre_tienda, descripcion_tienda,telefono) VALUES 
            ('".$this->username."','".$this->password."','".$this->email."','".$this->nombre_tienda."','".$this->descripcion_tienda."',".$this->telefono.")";
        $this->mysqli->query($sql);
        $this->mysqli->close();
    }

    public function get_InfoTienda(){
        $tienda=array(
            'id_user' => $this->id_user,
            'username'=> $this->username,
            'email'=> $this->email,
            'telefono'=> $this->telefono,
            'nombre_tienda'=>$this->nombre_tienda,
            'descripcion_tienda'=>$this->descripcion_tienda,            
        );
        return $tienda;
    }
    
    public function update()
    {
        $sql="UPDATE usuarios SET  telefono='".$this->telefono."' WHERE idPersona=".$id_user; 
        $this->mysqli->query($sql);
           $this->mysqli->close();

    }
/*   PARA MEJORAR: Funcion para retornar todas las tiendas existentes y luego poder mostrar los productos de cada tienda por separado

public function getallTiendas(){
        $sql = "SELECT nombre_tienda FROM usuarios";
        $retorna = array();
        if ( $resultado = $this->mysqli->query($sql) ){
			if ( $resultado->num_rows > 0 ){
                // SACAR EN UN ARRAY LA LISTA DE TIENDAS EXISTENTES
                //while ($finfo = mysqli_fetch_field($resultado)) {
                //    array_push($retorna, $finfo->);
                }
                return $retorna;
			}else{
                return false;
            }
        }
        unset($resultado);
        $this->mysqli->close();
    }

    */

}

?>