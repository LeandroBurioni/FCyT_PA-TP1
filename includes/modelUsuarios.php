<?php

class usuarios{
    private $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli('127.0.0.1', 'root', '', 'grupo1');
	}	
 
    public function autenticate($us, $pw){
        $query="SELECT * FROM usuarios WHERE username='".$us."' AND password='".$pw."'";
        if ($resultado = $this->mysqli->query($query) ){
            $fila = mysqli_fetch_assoc($resultado);
                return $fila['id_user'];
		}else{
            return false;
        }    }

    public function delete($id_user){
        $sql="DELETE FROM usuarios WHERE id_user=".$id_user;
        return ($this->mysqli->query($sql));  
        $this->mysqli->close();
    }

    public function save($username, $password, $email, $nombre_tienda, $descripcion_tienda, $telefono){
        $sql="INSERT INTO usuarios(username, password, email, nombre_tienda, descripcion_tienda,telefono) VALUES 
            ('".$username."','".$password."','".$email."','".$nombre_tienda."','".$descripcion_tienda."',".$telefono.")";
        $this->mysqli->query($sql);
        $this->mysqli->close();
    }


    public function existeUsuario($username){ //return this->......
        $query='SELECT username FROM usuarios WHERE username="'.$username.'"';
        $resultado = $this->mysqli->query($query);
        if ( $resultado->num_rows > 0 ){
            return true;
       }else{
           return false;
       }
    }

    public function getInfo_ID($id_user){ //Devuelve un arreglo con los atributos de la clase consultando la DB con id_user
 
        $sql = 'SELECT telefono, username, email, nombre_tienda, descripcion_tienda FROM usuarios WHERE id_user='.$id_user;
         $resultado = $this->mysqli->query($sql) ;
                 $info=$resultado->fetch_assoc();
         return $info;
			
        $this->mysqli->close();
    }

    public function update($id_user, $telefono, $username, $email, $nombre_tienda, $descripcion_tienda)
    {
        $sql='UPDATE usuarios SET telefono='.$telefono.', username="'.$username.'", email="'.$email.'", nombre_tienda="'.$nombre_tienda.'", descripcion_tienda="'.$descripcion_tienda.'" WHERE id_user='.$id_user; 
        $this->mysqli->query($sql);
        $this->mysqli->close();
        return;
    }    

}

?>