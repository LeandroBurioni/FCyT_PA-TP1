<?php 
 
  session_start();

include('./includes/header.php'); ?>

<p> Somos Leandro Burioni y Rodrigo Richard, estudiantes de la FCyT - UADER.</p>
<p>Esta web es nuestro proyecto para la materia Programacion Avanzada de 3er año de la carrera Licenciatura en Sistemas de Información. </p>

<p>Tu opinión nos interesa, hacenos llegar tus recomendaciones o inquietudes completando el siguiente formulario.</p>

<form class="register-form" action="#" method="post"> <!-- Completar la accion a llevar a cabo.-->
  <div class="elem-group">
    <label for="nombre_visitante">Nombre completo</label>
    <input type="text" name="nombre_visitante" placeholder="Ej: José Paz" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email_visitante">E-mail</label>
    <input type="email" name="email_visitante" placeholder="Ej: nombre@gmail.com" required>
  </div>
  <div class="elem-group">
    <label for="Asunto_email"">Asunto</label>
    <input type="text" name="Asunto_email" required placeholder="Ej: Consulta sobre precios" pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="elem-group">
    <label for="mensaje_visitante">Escriba su mensaje</label><br>
    <textarea name="mensaje_visitante" required cols=50 rows=5></textarea>
  </div>
  <button type="submit" class="btn btn-secondary">Enviar mensaje</button>
</form>

<?php include('./includes/footer.php'); ?> 