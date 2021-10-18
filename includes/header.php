<!DOCTYPE html>
<html lang="es">
<script>

</script>

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
<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <?php

     if(isset($_SESSION['usuario'])){        
        echo '
        <a class="navbar-brand" href="./inicio.php">
            <img src="./imagenes/UADERlogo.png" alt="" width="100" height="auto" class="d-inline-block align-top">
            <span>Programación Avanzada 2021</span>
        </a>';
    }
    else{
        echo '
        <a class="navbar-brand" href="./index.php">
            <img src="./imagenes/UADERlogo.png" alt="" width="100" height="auto" class="d-inline-block align-top">
            <span>Programación Avanzada 2021</span>
        </a>';
    }
    ?>
    
    <ul class="navbar-nav"> <!-- Para usar la class Active tambien necesitamos js-->
        <li class="nav-item">
            <a class="nav-link" href="./contacto.php">Contacto</a>
        </li>
        <?php
            if(isset($_SESSION['usuario'])){
                echo '<li class="nav-item">
                <a class="nav-link">Logueado como: ';
                echo $_SESSION['usuario'].'</a></li>';
                echo '<li class="nav-item">
                <a class="btn btn-secondary" href="logout.php" role="button">Cerrar Sesión</a>
                </li>';
                
            }
            else{ 
                echo '<li class="nav-item">
                <a class="btn btn-primary" href="./login.php">Iniciar Sesion</a>
                </li>';
            }
        ?>                       
    </ul>    
</nav>