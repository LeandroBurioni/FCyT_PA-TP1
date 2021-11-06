<?php

if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    	session_start();
	} 


include_once "./includes/model.php";

if ( $_POST['password'] == $_POST['password2'] ){
    $registrar= new usuarios;
    $registrar->set_username($_POST['username']);
    $registrar->set_password($_POST['password']);
    $registrar->set_email($_POST['email']);
    $registrar->set_nombre_tienda($_POST['nombre_tienda']);
    $registrar->set_descripcion_tienda($_POST['descripcion_tienda']);
    $registrar->set_telefono($_POST['telefono']);

    $registrar->save();

    header('Location: ./inicio.php');

}
else{ //Las contrasnias no coinciden!

}
?>