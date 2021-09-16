<!DOCTYPE html> <!-- Declaración del tipo de documento, version de HTML-->
<html lang="es"> <!-- comienzo del documento HTML-->

	<head> <!-- provee información general del documento-->
		<title>login</title> <!-- titulo de la página -->
	</head> <!-- cierre del head -->
	<body> <!-- representa el contenido de un documento HTML -->
	<?php include('../includes/php/header.php'); ?> <!-- incluimos el archivo header-->

	<form action="procesoLogin.php" method="POST"> <!-- inicio del formulario -->
		Usuario: <!-- texto que se mostrará en pantalla -->
			<input type="text" value="" name="usuario" /><br /><br />
			<!-- ingreso de datos. El type="text" es texto básico-->
			<!-- le asignamos un nombre: usuario y un valor por defecto, en este caso, vacío -->
		Contraseña: <!-- texto que se mostrará en pantalla -->
			<input type="password" value="" name="contrasenia" /><br /><br />
			<!-- ingreso de datos. El type="password" hace que no se vea lo que se escribe-->
			<!-- le asignamos un nombre: contrasenia y un valor por defecto, en este caso, vacío -->
			<input type="submit" name="bt_submit" value="Ingresar" /> <!-- agregamos un botón con type="submit" -->
			<!-- le asignamos un nombre: bt_submit -->
			<img src="../imagenes/login/login_a.png"style="width:28px;height:25px;"> <!-- agregamos una imagen, definimos su tamaño -->
		</form><!-- cierre del formulario -->
	<?php include('../includes/php/footer.php'); ?><!-- incluimos el archivo footer-->

	</body><!-- cierre del body -->
	
</html> <!-- cierre del documento -->