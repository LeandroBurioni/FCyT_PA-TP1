<?php 
require_once './includes/Page.php';
	if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    	session_start();
	} 
	if (isset($_SESSION['usuario'])) { //Si esta logeado, redirigir a inicio.php
		header('Location: ./inicio.php');
	}else{


		if (!isset($_SESSION['rand_code']) )
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
			
	
	$body='<br>
	<div class="login-form">
	<form action="procesoLogin.php" method="POST">
		<p class="text-center">Ingresar</p> 
		<div class="form-group">	
			<input type="text" class="form-control" value="" name="usuario" placeholder="Usuario" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" value="" name="contrasenia" placeholder="Contraseña" required><br>
		</div>
		<div class="form-group">
			<div class="div-captcha">
                <img class= "img_code" src="includes/rdnimg.php" ><br>
                <input type="text" class="form-control" name="rand_code" placeholder="Escriba el código" value="" required><br>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="bt_submit" value="Ingresar" style="margin:0px auto; display:block;"/><br>			
		</div>
		<div style="text-align: center">
		<a href="./registrate.php"> Crear cuenta</a>
		</div>
	</form>
	</div>
	<br>';

		$oPage=new Page();
      $oPage->setBody($body);
    echo $oPage->getHtml();
	}
?>
	

