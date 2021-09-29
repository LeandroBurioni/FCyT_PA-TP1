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
	<form action="procesoLogin.php" method="POST"> 
		Usuario:
			<input type="text" value="" name="usuario" required>
			<br><br>
		Contraseña:
			<input type="password" value="" name="contrasenia" required>
			<br>
			<br>
			<img style="width:28px;height:25px;" src="./imagenes/login_a.png">
			<div class="div-captcha">
                      <label for="Captcha">Código:</label>
                      <br>
                           <img src="includes/rdnimg.php" >
                           <input type="text" name="rand_code" value="">
                      </div>
			<input type="submit" class="btn btn-primary" name="bt_submit" value="Ingresar" />
		</form>
	<br>
	