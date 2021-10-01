<?php 
if(empty($_SESSION['usuario'])){
    session_start();
}
else{
	session_destroy();
}
	include('includes/header.php'); ?>
		
		<span class="texto"> Esta es la primer entrega del Trabajo Practico 1 - 2021</span>
		<!-- <div>
	<-?php if(!empty($_SESSION['usuario'])){
			echo "<form action='./index.php'> 
			<button onclick=".session_destroy()." class='btn btn-secondary'>Cerrar Sesion</button>
			</form>";
			} ?> 
		</div> -->
		<p>
		Esta es una landing page donde no se vuelve a menos que cierres sesion.
        </p>
<?php include('includes/footer.php'); ?>
