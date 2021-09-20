<?php include('./includes/header.php'); ?>

<form action="contact.php" method="post">
  <div class="elem-group">
    <label for="name">Nombre completo</label>
    <input type="text" name="nombre_visitante" placeholder="Ingrese nombre y apellido" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" name="email_visitante" placeholder="Ingrese correo electrónico" required>
  </div>
  <div class="elem-group">
    <label for="title">Asunto</label>
    <input type="text" name="Asunto_email" required placeholder="Introduzca el asunto" pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="elem-group">
    <label for="message">Escriba su mensaje</label><br>
    <textarea name="mensaje_visitante" required cols=50></textarea>
  </div>
  <button type="submit" class="btn btn-secondary">Enviar mensaje</button>
</form>
<?php include('./includes/footer.php'); ?>