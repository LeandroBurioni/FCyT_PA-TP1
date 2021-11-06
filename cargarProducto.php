<?php 
require_once './includes/Page.php';
  // Transformar esta pagina en una que sea para cargar los productos
  session_start();

$body='
<form class="register-form" action="procesoCargarProd.php" method="post">
  <div class="elem-group">
    <label for="prod_name">Nombre producto</label>
    <input type="text" name="prod_name" placeholder="Ej: Velas Artesanales" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="prod_desc">Descripcion</label>
    <input type="text" name="prod_desc" placeholder="Ej: Consultar disponibilidad de fragancias" required>
  </div>
  <div class="elem-group">
    <label for="precio">Precio por unidad</label>
    <input type="number" name="precio" placeholder="Ej: $150" required>
  </div>
  <button type="submit" class="btn btn-secondary">Enviar mensaje</button>
</form>';
$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
    ?>