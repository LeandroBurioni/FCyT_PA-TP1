<?php

session_start();

if ( !empty($_SESSION['rand_code']) )
{
  unset($_SESSION['rand_code']);
}

$token = "";

$a = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

$length = 20;

for ($i = 0; $i < $length; $i++)
{
  $token.= $a{rand(0, 61)};
}

$_SESSION['token']=$token;

?>

	<hr>
	<div class="login-form">
	<form action="procesoLogin.php" method="POST">
		<p class="text-center">Log in</p> 
		<div class="form-group">
			<label for="usuario">Usuario:</label>
			<input type="text" class="form-control" value="" name="usuario" required>
		</div>
		<div class="form-group">
			<label for="contrasenia">Contrasea:</label>
			<input type="password" class="form-control" value="" name="contrasenia" required>
		</div>
		<div class="form-group">
			<div class="div-captcha">
                <label for="captcha">Código:</label>
                    <img src="includes/rdnimg.php" >
                    <input type="text" class="form-control" name="rand_code" value="">
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="bt_submit">Ingresar
			<img style="width:28px;height:25px;" src="./imagenes/login_a.png"></button>
		</div>
	</form>
	</div>
	<br>
	