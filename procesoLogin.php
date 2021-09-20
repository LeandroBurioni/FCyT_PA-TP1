<?php 
    	if (!empty($_POST) && $_POST['bt_submit']){	//valido que se haya enviado el formulario y que no se encuentre vacio
		
            if (($_POST['usuario']!='')&&($_POST['contrasenia']!='')){//valido que las variables no vengan vacias
                $usuarioValido="fcytuader"; //usuario válido
                $contraseniaValido="programacionavanzada";//contraseña válida
                
                if(($_POST['usuario']==$usuarioValido)&&($_POST['contrasenia']==$contraseniaValido)){
                    //valido si las variables coinciden con los datos válidos
                    include('./includes/header.php');
                    echo "<div class='alert alert-success' role='alert'>Ingreso Correcto!</div>"; //mensaje en pantalla
                    include('./includes/footer.php');

                }else{ //si los datos no son válidos
                    include('./includes/header.php');
                    echo "<div class='alert alert-danger' role='alert'>Ingreso Incorrecto!</div>"; //mensaje en pantalla
                    include('./nologin.php');
                    include('./includes/footer.php');
                }}
            else{
                include('./includes/header.php');
                    echo "<div class='alert alert-danger' role='alert'>Ingreso Incorrecto!</div>"; //mensaje en pantalla
                    include('./nologin.php');
                    include('./includes/footer.php');
            }          
        }
        else{ //si alguien entra a /procesoLogin.php sin logearse
            include('./login.php');
        }
        
    ?>

    