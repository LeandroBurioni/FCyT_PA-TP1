<?php 
  require_once './includes/Page.php';
  session_start();
  include_once "./includes/modelProductos.php";
  //print_r($_SESSION['infoTienda']);
  $productos = new productos;
  $allProd = $productos->getProductos_Tienda($_SESSION['infoTienda']['id_user']);
  print_r($allProd);
$body='

<div class="flex-container">
			<div class="card mb-4 shadow-sm border">
             <div class="card-body">
			 	<big>Nombre Tienda</big><br>
			 	<big><strong>Titulo del producto</strong></big>
				
                <p class="card-text">
                    <text class="descripcion">Descripcion: </text><br>    
                    <medium class="price">Precio: $150</medium> 
                </p>
                <a class="link" href="https://api.whatsapp.com/send?phone=34123456789&text=hola,%20qué%20tal?">Quiero saber mas</a>
                 <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Fecha de Publicacion</small>
                 </div>
             </div>
            </div>

		</div>';

$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();

?>