<?php
 if(!isset($_SESSION)){ //Si no hay sesion iniciarla
  session_start();
} 
 require_once './includes/Page.php';
 include_once "./includes/modelUsuarios.php";

if(!isset($_SESSION['infoTienda'])){ //Si no hay sesion iniciarla
  header('Location: ./index.php');    
} 
if (!isset($_SESSION['tiempo'])) {
  $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 120) {
  session_destroy();
  header("Location: ./index.php");
}
$_SESSION['tiempo']=time();
    $user = new usuarios;
    $id_user=$_SESSION['infoTienda']['id_user'];
    $user_info= $user->getInfo_ID($id_user);
    $nombre_tienda=$user_info['nombre_tienda'];

$body='	 <div class="centrado">
           <div class="card-header">
             Opciones de usuario
           </div>
           <div class="card-body">
             <h5 class="card-title">'.$nombre_tienda.'</h5>
             <a style="text-align:center" href="viewUsuario.php?opt=modificar_datos&id_user='.$id_user.'" class="btn btn-primary">Modificar datos</a>
             <a href="viewUsuario.php?opt=modificar_pass&id_user='.$id_user.'" class="btn btn-primary">Modificar contraseña</a>
             <a href="procesoUsuario.php?opt=eliminar&id_user='.$id_user.'" class="btn btn-secondary">Eliminar</a>
           </div>           
         </div>';
$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();

?>