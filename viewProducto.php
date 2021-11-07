<?php 
require_once './includes/Page.php';
  //Esta vista es para cargar o modificar productos
  session_start();

if($_GET["opt"]=='cargar'){
$body='
<form class="register-form" action="procesoProducto.php?opt=cargar" method="post">
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
}
elseif($_GET["opt"] == 'modificar'){
    
    include_once "./includes/modelProductos.php";
    $prod= new productos;
    $resultado = $prod->getProducto_ID($_GET["id_prod"]);
    

  $body='<form class="register-form" action="procesoProducto.php?opt=modificar&id_prod='.$_GET["id_prod"].'" method="post">
    <div class="elem-group">
      <label for="prod_name">Nombre producto</label>
      <input type="text" name="prod_name" value='.$resultado["titulo"].'>
    </div>
    <div class="elem-group">
      <label for="prod_desc">Descripcion</label>
      <input type="text" name="prod_desc" value='.$resultado["descripcion"].'>
    </div>
    <div class="elem-group">
      <label for="precio">Precio por unidad</label>
      <input type="number" name="precio" value='.$resultado["precio"].'>
    </div>
    <button type="submit" class="btn btn-secondary">Enviar mensaje</button>
  </form>';
  }

$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
    ?>