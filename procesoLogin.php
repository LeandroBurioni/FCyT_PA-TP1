<?php 

session_start();

include_once "./includes/modelUsuarios.php";

//Verificacion de CAPTCHA
if (!empty($_POST['rand_code']) ){
    if ( $_POST['rand_code']==$_SESSION['rand_code'] ){ //Token valido, empieza validacion de datos del form
        if (!empty($_POST) && $_POST['bt_submit']){	//valido que se haya enviado el formulario y que no se encuentre vacio
		
            if (($_POST['usuario']!='')&&($_POST['contrasenia']!='')){//no necesario xq son required en html

                $user_in=$_POST['usuario'];     //fijarse que no haya caracteres no permitidos         
                $pass_in=$_POST['contrasenia']; // para mejorar la seguridad

                $user_sql = new usuarios;
                if($user_sql->autenticate($user_in, $pass_in)){

                    $infoTienda = $user_sql->get_InfoTienda();
                    
                    $_SESSION['infoTienda']=$infoTienda;
                    //$_SESSION['username']=$infoTienda['username'];
                    //$_SESSION['nombreTienda']=$infoTienda['nombre_tienda'];

                    header('Location: ./inicio.php');
                    
                }else{ //si los datos no son válidos
                    session_destroy();
                    //header('Location: ./index.php');
                    include('./includes/header.php');
                    echo '<div class="alert alert-danger" role="alert">Usuario y/o contraseña incorrecta!</div>'; //mensaje en pantalla
                    include('./nologin.php');
                    include('./includes/footer.php');
                }}
            else{
                session_destroy();
                include('./includes/header.php');// aca no llega nunca, los input son required
                echo '<div class="alert alert-danger" role="alert">Nunca llegamos a aca!</div>'; //mensaje en pantalla
                include('./nologin.php');
                include('./includes/footer.php');
            }          
        }
    }else{
        //Hubo un error en el captcha
        session_destroy();
        include('./includes/header.php');
        echo '<div class="alert alert-danger" role="alert">Hubo un error en el captcha!</div>'; //mensaje en pantalla
        include('./nologin.php');
        include('./includes/footer.php');
    }
}
else{
    //no completaste el captcha
    session_destroy();
    include('./includes/header.php');
    echo '<div class="alert alert-danger" role="alert">No completaste el captcha!</div>'; //mensaje en pantalla
    include('./nologin.php');
    include('./includes/footer.php');
}
    ?>