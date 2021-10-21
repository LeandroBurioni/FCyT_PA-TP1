<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Vitreaux: Feria Online</title>
        <link rel="icon" type="image/png" href="./imagenes/favicon.png">
		<link rel="stylesheet" href="./css/estilos.css">
        <!-- Bootstrap CSS & js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
	 <!-- Barra de navegación -->
<nav class="navbar navbar-expand-md navbar-dark">

    <?php

     if(isset($_SESSION['usuario'])){        
        echo '
        <a class="navbar-brand" href="./inicio.php">
            <img src="./imagenes/vidriera_sinfondo.png" alt="" width="100" height="auto" class="d-inline-block align-center">
            <span>Vitreaux: Feria Online</span>
        </a>';
    }
    else{
        echo '
        <a class="navbar-brand" href="./index.php">
            <img src="./imagenes/vidriera_sinfondo.png" alt="" width="100" height="auto" class="d-inline-block align-center">
            <span>Vitreaux: Feria Online</span>
        </a>';
    }
    ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="./tiendas.php">Tiendas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./quienes-somos.php">Quienes somos?</a>
        </li>
        <?php
            if(isset($_SESSION['usuario'])){
                echo '<li class="nav-item">
                    <a class="nav-link" href="./cargarProducto.php">Cargar Producto</a>
                    </li>';
                echo '<li class="nav-item">
                <a>Logueado como: ';
                echo $_SESSION['usuario'].'</a>';
                echo '<a class="nav-link btn btn-secondary" href="logout.php" role="button">Cerrar Sesión</a>
                    </li>';
            }
            else{ 
                echo '<li class="nav-item">
                <a class="nav-link btn btn-primary" href="./login.php">Iniciar Sesion</a>
                </li>';
            }
        ?>                       
     </ul>

    </div>
</nav>

<div>