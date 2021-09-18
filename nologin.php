	
	<hr>
	<form action="procesoLogin.php" method="POST"> <!-- inicio del formulario -->
		Usuario: <!-- texto que se mostrará en pantalla -->
			<input type="text" value="" name="usuario" required>
			<!-- ingreso de datos. El type="text" es texto básico-->
			<!-- le asignamos un nombre: usuario y un valor por defecto, en este caso, vacío -->
		Contraseña: <!-- texto que se mostrará en pantalla -->
			<input type="password" value="" name="contrasenia" required>
			<!-- ingreso de datos. El type="password" hace que no se vea lo que se escribe-->
			<!-- le asignamos un nombre: contrasenia y un valor por defecto, en este caso, vacío -->
			<input type="submit" class="btn btn-primary" name="bt_submit" value="Ingresar" /> <!-- agregamos un botón con type="submit" -->
			<!-- le asignamos un nombre: bt_submit -->
			<img style="width:28px;height:25px;" src="./imagenes/login_a.png"> <!-- agregamos una imagen, definimos su tamaño -->
		</form><!-- cierre del formulario -->
	<br>
	