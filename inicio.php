<!--Aca va un pagina de bienvenida a la que se llega despues de loguearse correctamente-->
<?php 
  session_start();
 
  if (!isset($_SESSION['infoTienda'])) {
    header('Location: ./index.php'); //Si no esta logeado lo redirige a index.php
  }  
  else{    
    require_once './includes/Page.php';
    print_r($_SESSION['infoTienda']);
  $body="<h1>Bienvenido ".$_SESSION['infoTienda']['nombre_tienda']."</h1>" ;
  $body.='<p>Gracias por confiar en nosotros y utilizar esta plataforma para aumentar tus ventas.</p>
  <a>Pronto podras comenzar a publicar tus productos para que los clientes puedan verlos online.</a>';

  $oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
    
  }
 
	?>