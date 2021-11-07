<?php
 require_once './includes/Page.php';

if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
    $username=$_SESSION['infoTienda']['username'];
    $telefono=$_SESSION['infoTienda']['telefono'];
    $correo=$_SESSION['infoTienda']['email'];
    $nombre_tienda=$_SESSION['infoTienda']['nombre_tienda'];
    $descripcion_tienda=$_SESSION['infoTienda']['descripcion_tienda'];
} 


$body='
<form class="register-form" action="./includes/modificarUsuario.php" method="post">
  <div class="elem-group">
    <label for="username">Nombre de Usuario</label>
    <input type="text" name="username" value="'.$username.'"pattern="[A-Za-z0-9]{1,50}" >
  </div>
  <div class="elem-group">
    <label for="telefono">Telefono</label>
    <input type="tel" name="telefono" value="'.$telefono.'" >
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" name="email" value="'.$correo.'" >
  </div>
  <div class="elem-group">
    <label for="nombre_tienda">Nombre de la tienda</label>
    <textarea name="descripcion_tienda" row="2" maxlenght="25">'.$nombre_tienda.'</textarea>
  </div>
  <div class="elem-group">
    <label for="descripcion_tienda">Descripcion de la tienda</label>
    <textarea name="descripcion_tienda" maxlenght="200">'.$descripcion_tienda.'</textarea>
  </div>
  <div style="text-align: center">
  <button name ="modificar" type="submit"  class="btn btn-secondary">Modificar</button>
  </div>
</form>';


$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();

?>