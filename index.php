<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: ./inicio.php');
	}
	include('includes/header.php'); 
?>
	<h2>Bienvenido a la vidriera online!</h2>
	<p>El lugar donde podras encontrar los productos que necesitas, al mejor precio y ponerte en contacto directo con los vendedores.</p>


	<img class= "img_index" src="./imagenes/catalogo.png" alt="">	

	<p>
		Para comenzar a publicar tus productos, <a href="./registrate.php">registrate haciendo click, aqui!</a> 
	</p>
<?php
	include('includes/footer.php');
?>
