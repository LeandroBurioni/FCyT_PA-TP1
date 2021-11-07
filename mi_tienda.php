<?php 
  require_once './includes/Page.php';
  session_start();
  include_once "./includes/modelProductos.php";
 
  $productos = new productos;
  $myProd = $productos->getProductos_Tienda($_SESSION['infoTienda']['id_user']);
  
         $filas=array();;

      while ( $producto = $myProd->fetch_assoc() ){
         $ArrayProd = array();
			$ArrayProd['id_producto'] = $producto["id_producto"];	
         $ArrayProd['titulo'] = $producto["titulo"];
         $ArrayProd['descripcion'] = $producto["descripcion"];
         $ArrayProd['precio'] = $producto["precio"];
         $ArrayProd['datetime'] = $producto["datetime"];
         $ArrayProd['id_user'] = $producto["id_user"];

         array_push($filas, $ArrayProd);
      }
   
   $body = '<p>Aca podras modificar y eliminar tus productos cargados..</p>
   <div class="flex-container">';

   foreach($filas as $p){
		$body.='<div class="card mb-4 shadow-sm border">
					<div class="card-body">
					 <big><strong>'.$p['titulo'].'</strong></big>	
					 <p class="card-text">
                    <text class="descripcion">'.$p['descripcion'].'</text><br>    
                    <medium class="price"> $'.$p['precio'].'</medium> 
                </p>
				<div class="d-flex justify-content-between align-items-center">
				   <small class="text-muted">'.$p["datetime"].'</small>
				</div>
			      </div>
            <a class="btn btn-primary">Modificar</a><button class="btn btn-secondary">Eliminar</button> $productos->delete($p["id_producto"])
		      </div>';
	}
	$body.='</div>';

   
$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();

?>