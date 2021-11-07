<?php
	session_start();
	require_once './includes/Page.php';
	include_once "./includes/modelProductos.php";

	if (isset($_SESSION['infoTienda'])) {	//Si esta logeado, redirigir a inicio.php
		header('Location: ./inicio.php');
	}
	else{
		$productos = new productos;
		$allProd = $productos->getall();
	   // print_r($allProd);
		 
	  $filas='';
	  
			   // $fila = mysqli_fetch_assoc($allProd);
	  
			while ( $producto = $allProd->fetch_assoc() ) 
			{
			   $filas.='<tr>';
				  $filas.='<td scope="row">'.$producto["titulo"].'</td>';
				  $filas.='<td>'.$producto["descripcion"].'</td>';
				  $filas.='<td>'.$producto["precio"].'</td>';
				  '<td><a href="index.php?opt=edit&idPersona='.$producto["id_user"].'" class="btn btn-outline-warning btn-sm">editar</a></td>';
				  '<td><a href="index.php?opt=delete&idPersona='.$producto["id_user"].'" class="btn btn-outline-danger btn-sm">borrar</a></td>';
			   $filas.='</tr>';
	  
			}

	$body='<h2>Bienvenido a VITRAUX la feria online!</h2>
	<p>El lugar donde podras encontrar los productos que necesitas, al mejor precio y ponerte en contacto directo con los vendedores.</p>
	<p>
		Para comenzar a publicar tus productos, <a href="./registrate.php">registrate haciendo click aqui!</a> 
	</p>

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

		</div>	
  
<table class="table table-striped">
				 <thead>
					<tr>
					<th scope="col">titulo</th>   
					<th scope="col">descripcion</th>                     
					   <th scope="col">precio</th>  
					   <th scope="col"></th>
					   <th scope="col"></th>
					</tr>
				 </thead>
				 <tbody>'.$filas.'</tbody>
			  </table>';


$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
}
	?>