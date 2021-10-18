<?php 
	if(!isset($_SESSION)){ 
    	session_start();
	} 
	if (isset($_SESSION['usuario'])) {
		header('Location: ./inicio.php');
	}else{
		include('./includes/header.php'); 
		include('./nologin.php');
    	include('./includes/footer.php'); 
	}
?>
	

