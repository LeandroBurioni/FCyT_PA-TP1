<?php 
 require_once './includes/Page.php';
  session_start();

$body='
<form class="register-form" action="" method="post">
  <div class="elem-group">
    <label for="name">Nombre de la tienda</label>
    <input type="text" name="nombre_tienda" placeholder="Ej: Todo por 2 pesos" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" name="email_tienda" placeholder="Ej: ventas@Todo2ARS.com" required>
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
  <div style="text-align: center">
  <button type="submit" class="btn btn-secondary">Registrarse</button>
  </div>
</form>';


$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
    
    ?>