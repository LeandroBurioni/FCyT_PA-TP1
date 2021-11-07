<?php
if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
} 

class productos{
	
    private $id_producto;
    private $titulo;
	private $descripcion;
    private $precio;
    private $fecha;
    private $id_tienda;

    private $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli('127.0.0.1', 'root', '', 'grupo1'); //inicializo
	}

    public function set_titulo($titulo){
            $this->titulo = $titulo;
    }

    public function set_descripcion($descripcion){
            $this->descripcion = $descripcion;
    }

    public function set_precio($precio){
            $this->precio = $precio;
    }
    
    public function set_id_tienda($id_tienda){
        $this->id_tienda = $id_tienda;
    }

    public function save(){
        $sql="INSERT INTO productos(titulo, descripcion, precio, id_user) VALUES 
            ('".$this->titulo."','".$this->descripcion."','".$this->precio."',".$this->id_tienda.")";
        $this->mysqli->query($sql);
        $this->mysqli->close();
    }

    public function getProductos_Tienda($user_id){
        $sql = "SELECT * FROM productos WHERE id_user=".$user_id;
        
        if ( $resultado = $this->mysqli->query($sql) )
		{
			if ( $resultado->num_rows > 0 )
 			{
                 return $resultado;
			}else{
                return false;
            }

        }
        
        unset($resultado);
		  
        $this->mysqli->close();
        
        
        
     //   if ( $data = $this->mysqli->query($sql) ){
       //     $array = array();
         //   while($result = mysqli_fetch_array($data)){
           //     $array[] =$result;
            //}
            //return $array;
       // }
        //else return false;
    }
    public function getall()
    {

        $sql = "SELECT * FROM productos";

        if ( $resultado = $this->mysqli->query($sql) )
		{
			if ( $resultado->num_rows > 0 )
 			{
                 return $resultado;
			}else{
                return false;
            }

        }
        
        unset($resultado);
		  
        $this->mysqli->close();
        
    }


}

?>