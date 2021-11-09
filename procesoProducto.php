<?php
	session_start();
//if(!isset($_SESSION)){ //Si no hay sesion iniciarla
  //  
//	} 

if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
  }
  else if (time() - $_SESSION['tiempo'] > 120) {
    session_destroy();
    /* Aquí redireccionas a la url especifica */
    header("Location: ./index.php");
    die();  
  }
  $_SESSION['tiempo']=time();
  
include_once "./includes/modelProductos.php";
$producto= new productos;

if($_GET["opt"]=='cargar'){
    $producto->set_titulo($_POST['prod_name']);
    $producto->set_descripcion($_POST['prod_desc']);
    $producto->set_precio($_POST['precio']);
    $producto->set_id_tienda($_SESSION['infoTienda']['id_user']);

    $producto->save();
    header('Location: ./mi_tienda.php');
}

if($_GET["opt"]=='modificar'){
    if($producto->update($_GET["id_prod"], $_POST['prod_name'], $_POST['prod_desc'], $_POST['precio'])){
        header('Location: ./mi_tienda.php');
    }
    else{
        echo "No hizo el modificar";
    }
}

if($_GET["opt"]=='eliminar'){ 
    print $_GET["opt"]." a ".$_GET["id_prod"];
    if($producto->delete($_GET["id_prod"])){
        header('Location: ./mi_tienda.php');
    }
    else{
        echo "No hizo el delete";
    }

}

?>