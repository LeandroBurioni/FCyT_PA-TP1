<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: ./inicio.php');
	}
	include('includes/header.php'); 
?>
	
	<img class= "img_index" src="./imagenes/desarrollo-web.png" alt="">	

<?php
	include('includes/footer.php');
?>
