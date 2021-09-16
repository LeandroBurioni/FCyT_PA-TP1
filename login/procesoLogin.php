<!DOCTYPE html> <!-- Declaración del tipo de documento, version de HTML-->
<html lang="es"> <!-- comienzo del documento HTML-->

	<head> <!-- provee información general del documento-->
		<title>login</title> <!-- titulo de la página -->
	</head> <!-- cierre del head -->

	<body> <!-- representa el contenido de un documento HTML -->
	<?php include('../includes/php/header.php'); //incluimos el archivo header

    	if ($_POST['bt_submit']){	//valido que se haya enviado el formulario
		
            if (($_POST['usuario']!='')&&($_POST['contrasenia']!='')){//valido que las variables no vengan vacias
                $usuarioValido="fcytuader"; //usuario válido
                $contraseniaValido="programacionavanzada";//contraseña válida
                
                if(($_POST['usuario']==$usuarioValido)&&($_POST['contrasenia']==$contraseniaValido)){
                    //valido si las variables coinciden con los datos válidos
                    echo 'ingreso correctamente';	//mensaje en pantalla
                }else{ //si los datos no son válidos
                    echo 'INGRESO INCORRECTO'; //mensaje en pantalla
                }
            }          
        }
    ?> <!-- cierre del código PHP -->
    <br />
    <br />
    <a href="login.php">Volver</a> <!-- enlace a la página anterior -->
	<?php include('../includes/php/footer.php'); ?> <!-- incluimos el archivo footer-->

	</body> <!-- cierre del body -->
	
</html> <!-- cierre del documento -->