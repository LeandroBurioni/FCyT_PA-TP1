<?php

if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    	session_start();
	} 


include_once "./includes/modelProductos.php";

    $nuevo= new productos;
    $nuevo->set_titulo($_POST['prod_name']);
    $nuevo->set_descripcion($_POST['prod_desc']);
    $nuevo->set_precio($_POST['precio']);
    $nuevo->set_id_tienda($_SESSION['infoTienda']['id_user']);
    
    
    $nuevo->save();

    
?>