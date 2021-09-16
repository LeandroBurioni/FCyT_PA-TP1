<!DOCTYPE html> <!-- Declaración del tipo de documento, version de HTML-->
<html lang="es"> <!-- comienzo del documento HTML-->
	<head> <!-- provee información general del documento-->
		<title>Inicio</title> <!-- titulo de la página -->
	</head> <!-- cierre del head -->
	<body> <!-- representa el contenido de un documento HTML -->
		<?php include('includes/php/header.php'); ?> <!-- incluimos el archivo header-->
	    <h2> <!-- formato encabezado tipo h2, este estilo lo podemos configurar, este es por defecto -->
			<img src="imagenes/login_a.png" style="width:50px;height:50px;"> <!-- agregamos una imagen, definimos su tamaño -->
        	<!-- la imagen se encuentra en la carpeta imagenes -->
			<a href="login/login.php">Ingresar</a> <!-- Enlace a la página de ingreso -->
		</h2> <!-- cierre del formato encabezado h2 -->
        
		<?php include('includes/php/footer.php'); ?> <!-- incluimos el archivo footer-->
	</body> <!-- cierre del body -->
</html> <!-- cierre del documento -->