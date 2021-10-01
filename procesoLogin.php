<?php 

if(empty($_SESSION)){
    session_start();
}


//Verificacion de CAPTCHA
if (!empty($_POST['rand_code']) ){
    if ( $_POST['rand_code']==$_SESSION['rand_code'] ){ //Token valido, empieza validacion de datos del form
        if (!empty($_POST) && $_POST['bt_submit']){	//valido que se haya enviado el formulario y que no se encuentre vacio
		
            if (($_POST['usuario']!='')&&($_POST['contrasenia']!='')){//valido que las variables no vengan vacias
                $usuarioValido="fcytuader"; //usuario válido
                $contraseniaValido="programacionavanzada";//contraseña válida
                
                if(($_POST['usuario']==$usuarioValido)&&($_POST['contrasenia']==$contraseniaValido)){
                    $_SESSION['usuario']=$_POST['usuario'];
                    //valido si las variables coinciden con los datos válidos
                    //include('./includes/header.php');
                    //echo "<div class='alert alert-success' role='alert'>Ingreso Correcto!</div>"; //mensaje en pantalla
                    //include('./inicio.php');
                    header('Location: ./inicio.php');
                    //include('./includes/footer.php');
                }else{ //si los datos no son válidos
                    session_destroy();
                    include('./includes/header.php');
                    echo "<div class='alert alert-danger' role='alert'>Usuario y/o contraseña incorrecta!</div>"; //mensaje en pantalla
                    include('./nologin.php');
                    include('./includes/footer.php');
                }}
            else{
                session_destroy();
                include('./includes/header.php');// aca no llega nunca, los input son required
                echo "<div class='alert alert-danger' role='alert'>Nunca llegamos a aca!</div>"; //mensaje en pantalla
                include('./nologin.php');
                include('./includes/footer.php');
            }          
        }
    }else{
        //Hubo un error en el captcha
        session_destroy();
        include('./includes/header.php');
        echo "<div class='alert alert-danger' role='alert'>Hubo un error en el captcha!</div>"; //mensaje en pantalla
        include('./nologin.php');
        include('./includes/footer.php');
    }

}
else{
    //no completaste el captcha
    session_destroy();
    include('./includes/header.php');
    echo "<div class='alert alert-danger' role='alert'>No completaste el captcha!</div>"; //mensaje en pantalla
    include('./nologin.php');
    include('./includes/footer.php');
}
    ?>