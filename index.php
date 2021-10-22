<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: ./inicio.php');
	}
	include('includes/header.php'); 
?>
	<h2>Bienvenido a VITRAUX la feria online!</h2>
	<p>El lugar donde podras encontrar los productos que necesitas, al mejor precio y ponerte en contacto directo con los vendedores.</p>
	<p>
		Para comenzar a publicar tus productos, <a href="./registrate.php">registrate haciendo click aqui!</a> 
	</p>

	<img class= "img_index" src="./imagenes/catalogo.png" alt="">	

	
<?php
	include('includes/footer.php');
?>
