<?php 
if(empty($_SESSION)){
    session_start();
}
	include('includes/header.php'); ?>
		
		<span class="texto"> Esta es la primer entrega del Trabajo Practico 1 - 2021</span>
		<div>
		<?php if(!empty($_SESSION['usuario'])){
			echo "<form action='./index.php'> 
			<button onclick=".session_destroy()." class='btn btn-secondary'>Cerrar Sesion</button>
			</form>";
		} ?>
		</div>
        
<?php include('includes/footer.php'); ?>
