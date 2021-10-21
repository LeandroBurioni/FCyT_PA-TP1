<!--Aca va un pagina de bienvenida a la que se llega despues de loguearse correctamente-->
<?php 
  session_start();
 
  if (!isset($_SESSION['usuario'])) {
    header('Location: ./index.php');
  }  
  else{    
    include('./includes/header.php');
  }
 
  echo '<h1>Bienvenido '.$_SESSION['usuario'] .'</h1>' ;
  ?>  
  
  <p>Gracias por confiar en nosotros y utilizar esta plataforma para aumentar tus ventas.</p>
  <a>Pronto podras comenzar a publicar tus productos para que los clientes puedan verlos online.</a>

  <?php include('./includes/footer.php'); ?>

