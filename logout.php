<?php   //proceso para cerrar sesion y redirigir a index.php
@session_start();
session_destroy();
header("Location: index.php");
?>