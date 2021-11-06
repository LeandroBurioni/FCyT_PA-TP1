<?php 
 require_once './includes/Page.php';
  session_start();

$body='
<form class="register-form" action="procesoRegistrate.php" method="post">
  <div class="elem-group">
    <label for="username">Nombre de Usuario</label>
    <input type="text" name="username" placeholder="Ej: Juan Perez" pattern="[A-Za-z0-9]{1,50}" required>
  </div>
  <div class="elem-group">
    <label for="telefono">Telefono</label>
    <input type="tel" name="telefono" placeholder="Ej: 3435000111" required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" name="email" placeholder="Ej: ventas@Todo2ARS.com" required>
  </div>
  
  <div class="elem-group">
    <label for="password">Contraseña</label>
    <input type="password" name="password" required>
  </div>

  <div class="elem-group">
    <label for="password2">Repita su contraseña</label>
    <input type="password" name="password2" required>
  </div>
  <br>
  <div class="elem-group">
    <label for="nombre_tienda">Nombre de la tienda</label>
    <input type="text" name="nombre_tienda" placeholder="Ej: Todo por 2 pesos" pattern="[A-Za-z0-9]{1,15}" required>
  </div>
  <div class="elem-group">
    <label for="descripcion_tienda">Descripcion de la tienda</label>
    <input type="text" name="descripcion_tienda" placeholder="Ej: Todo por 2 pesos" pattern="{1,200}"   required>
  </div>
  <div style="text-align: center">
  <button type="submit" class="btn btn-secondary">Registrarse</button>
  </div>
</form>';


$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
    
    ?>