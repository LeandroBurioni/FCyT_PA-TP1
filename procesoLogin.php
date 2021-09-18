<?php 

    	if ($_POST['bt_submit']){	//valido que se haya enviado el formulario
		
            if (($_POST['usuario']!='')&&($_POST['contrasenia']!='')){//valido que las variables no vengan vacias
                $usuarioValido="fcytuader"; //usuario válido
                $contraseniaValido="programacionavanzada";//contraseña válida
                
                if(($_POST['usuario']==$usuarioValido)&&($_POST['contrasenia']==$contraseniaValido)){
                    //valido si las variables coinciden con los datos válidos
                    include('./includes/header.php');
                    echo 'ingreso correctamente';	//mensaje en pantalla
                    include('./includes/footer.php');
                }else{ //si los datos no son válidos
                    echo 'INGRESO INCORRECTO'; //mensaje en pantalla
                    include('./login.php');
                }}
            else{
                echo 'INGRESO INCORRECTO'; //prevenir submitir con campos vacios
                include('./login.php');
                
            }          
        }
    ?> <!-- cierre del código PHP -->

    