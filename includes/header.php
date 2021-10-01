<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Programación Avanzada</title>
		<link rel="stylesheet" href="./css/estilos.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>

    <body class="bg-light">

        <div class="container">

	 <!-- Barra de navegación -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark"> <!--  -->
    <a class="navbar-brand" href="
    <?php if(!empty($_SESSION['usuario'])){
                echo "./inicio.php";}//si hay una session abierta, redirige a inicio
                else{
                    echo "./index.php";//sino redirige a la landing
                }?>
    ">
        <img src="./imagenes/UADERlogo.png" alt="" width="150" height="auto" class="d-inline-block align-top">
        <span>Programación Avanzada 2021</span>
    </a>
    <!-- Sin js no hay boton hamburguesa y menu colapsable.

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarNav"> -->
</br>
        <ul class="navbar-nav"> <!-- Para usar la class Active tambien necesitamos js-->
            <?php if(!empty($_SESSION['usuario'])){
                echo "<li class='nav-item'>
                <a class='nav-link'>Logeado como:";
                echo $_SESSION['usuario']."</a></li>";
            }?>
            
            <li class="nav-item">
                <a class="nav-link" href="./login.php">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./contacto.php">Contacto</a>
            </li>
        </ul>
    <!-- </div> -->
</nav>