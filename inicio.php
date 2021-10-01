<!--Aca va un pagina de bienvenida a la que se llega despues de loguearse correctamente-->
<?php 
if(empty($_SESSION)){
    session_start();
}
 ?>

<h1>Bienvenido <?php echo $_SESSION['usuario'] ?>!</h1>



