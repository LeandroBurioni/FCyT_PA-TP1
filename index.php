<?php
	session_start();
	require_once './includes/Page.php';
	if (isset($_SESSION['usuario'])) {	//Si esta logeado, redirigir a inicio.php
		header('Location: ./inicio.php');
	}
	else{
	$body='<h2>Bienvenido a VITRAUX la feria online!</h2>
	<p>El lugar donde podras encontrar los productos que necesitas, al mejor precio y ponerte en contacto directo con los vendedores.</p>
	<p>
		Para comenzar a publicar tus productos, <a href="./registrate.php">registrate haciendo click aqui!</a> 
	</p>

	<img class= "img_index" src="./imagenes/catalogo.png" alt="">	';

$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();
}
	?>