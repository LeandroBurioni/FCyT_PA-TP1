<?php 
require_once './includes/Page.php';
  //Esta vista es para cargar o modificar productos
  if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
} 
  if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
  }
  else if (time() - $_SESSION['tiempo'] > 120) {
    session_destroy();
    header("Location: ./index.php");
  }
  $_SESSION['tiempo']=time();


if( ($_GET["opt"] == 'modificar_datos') && ($_GET["id_user"] == $_SESSION['infoTienda']['id_user']) ){
    
    include_once "./includes/modelUsuarios.php";
    $user= new usuarios;
    $cambiar= $user->getInfo_ID($_GET["id_user"]);

  $body='
  <form class="register-form" action="procesoUsuario.php?opt=modificar_datos&id_user='.$_GET["id_user"].'" method="post">
    <div class="elem-group">
      <label for="username">Nombre de Usuario</label>
      <input type="text" name="username" value="'.$cambiar["username"].'"pattern="[A-Za-z0-9]{1,50}" >
    </div>
    <div class="elem-group">
      <label for="telefono">Telefono</label>
      <input type="numer" name="telefono" value="'.$cambiar["telefono"].'" >
    </div>
    <div class="elem-group">
      <label for="email">E-mail</label>
      <input type="email" name="email" value="'.$cambiar["email"].'" >
    </div>
    <div class="elem-group">
      <label for="nombre_tienda">Nombre de la tienda</label>
      <textarea name="nombre_tienda" cols="32" maxlenght="25" >'.$cambiar["nombre_tienda"].'</textarea>
    </div>
    <div class="elem-group">
      <label for="descripcion_tienda">Descripcion de la tienda</label>
      <textarea name="descripcion_tienda" cols="32" maxlenght="200">'.$cambiar["descripcion_tienda"].'</textarea>
    </div>
    <div class="centrado">
        <button type="submit" class="btn btn-secondary">Modificar</button>
        </div>
    </form>';
  }
elseif (($_GET["opt"] == 'modificar_datos') && ($_GET["id_user"] != $_SESSION['infoTienda']['id_user']) ){
  header("Location: ./viewUsuario.php?opt=modificar_datos&id_user=".$_SESSION['infoTienda']['id_user']);
}
if( ($_GET["opt"] == 'modificar_pass') && ($_GET["id_user"] == $_SESSION['infoTienda']['id_user']) ){
  $body='
  <form class="register-form" action="procesoUsuario.php?opt=modificar_pass&id_user='.$_GET["id_user"].'" method="post">
    <div class="elem-group">
      <label for="vieja">Contrasena antigua:</label>
      <input type="pass" name="vieja" required>
    </div>
  <div class="elem-group">
    <label for="vieja">Contrasena nueva:</label>
    <input type="pass" name="nueva1" required >
  </div>
  <div class="elem-group">
    <label for="vieja">Repita contrasena nueva:</label>
    <input type="pass" name="nueva2" required >
  </div>
    <div class="centrado">
        <button type="submit" class="btn btn-secondary">Modificar</button>
        </div>
    </form>';
}
elseif (($_GET["opt"] == 'modificar_pass') && ($_GET["id_user"] != $_SESSION['infoTienda']['id_user']) ){
  header("Location: ./viewUsuario.php?opt=modificar_pass&id_user=".$_SESSION['infoTienda']['id_user']);
}

$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
    ?>