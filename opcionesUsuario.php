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
    <input type="text" name="username" value="'.$username.'"pattern="[A-Za-z0-9]{1,50}" required>
  </div>
  <div class="elem-group">
    <label for="telefono">Telefono</label>
    <input type="tel" name="telefono" value="'.$telefono.'" required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" name="email" value="'.$correo.'" required>
  </div>
  <div class="elem-group">
    <label for="nombre_tienda">Nombre de la tienda</label>
    <input type="text" name="nombre_tienda" value="'.$nombre_tienda.'"  pattern="[A-Za-z0-9]{1,15}" required>
  </div>
  <div class="elem-group">
    <label for="descripcion_tienda">Descripcion de la tienda</label>
    <input type="text" name="descripcion_tienda" value="'.$descripcion_tienda.'"  pattern="{1,200}"   required>
  </div>
  <div style="text-align: center">
  <button name ="modificar" type="submit"  class="btn btn-secondary">Modificar</button>
  </div>
</form>';


$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();

?>