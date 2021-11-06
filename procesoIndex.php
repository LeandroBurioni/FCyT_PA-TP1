<?php
// Esta pagina es para mostrar todos los productos existentes en el index (tambien se puede usar para la funcionalida de separar las tiendas)

if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
} 


include_once "./includes/model.php";

//$sql_index= new usuarios;
//print_r($sql_index->getallTiendas());


?>