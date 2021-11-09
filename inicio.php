<?php 

  if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
  } 
  
  if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
  }
  else if (time() - $_SESSION['tiempo'] > 120) {
    session_destroy();

    header("Location: ./index.php");
    die();  
  }
  $_SESSION['tiempo']=time();
  
  if (!isset($_SESSION['infoTienda'])) {
    header('Location: ./index.php'); //Si no esta logeado lo redirige a index.php
  }  
  elseif (isset($_SESSION['infoTienda'])){  // No necesario pero para verificar que hay sesion iniciada
   
  require_once './includes/Page.php';
    
  $body="<h1>Bienvenido ".$_SESSION['infoTienda']['username']."</h1>" ;
  $body.='<p>Gracias por confiar en nosotros y utilizar esta plataforma para aumentar tus ventas.</p>
  <a>Pronto podras comenzar a publicar tus productos para que los clientes puedan verlos online.</a>';

  $oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
    
  }
 
	?>