<?php 
 
  session_start();

include('./includes/header.php'); ?>

<form action="" method="post">
  <div class="elem-group">
    <label for="name">Nombre de la tienda</label>
    <input type="text" name="nombre_tienda" placeholder="Ej: Todo por 2 pesos" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" name="email_tienda" placeholder="Ej: ventas@Todo2ARS.com" required>
  </div>
  
  <div class="elem-group">
    <label for="password">Contrasena</label>
    <input type="password" name="password" required>
  </div>

  <div class="elem-group">
    <label for="password2">Repita su contrasena</label>
    <input type="password" name="password2" required>
  </div>

  <button type="submit" class="btn btn-secondary">Empezar a vender</button>
</form>
<?php include('./includes/footer.php'); ?>