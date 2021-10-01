<!--Aca va un pagina de bienvenida a la que se llega despues de loguearse correctamente-->
<?php 
if(empty($_SESSION['usuario'])){
    session_start();
}
include('./includes/header.php');
 ?>

                    
<h1>Bienvenido <?php echo $_SESSION['usuario'] ?>!</h1>


<form action='./index.php'> 
    <button onclick="<?php session_destroy() ?>" class='btn btn-secondary'>Cerrar Sesion</button>
</form>

<?php include('./includes/footer.php'); ?>

