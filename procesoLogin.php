<?php 

session_start();

include_once "./includes/modelUsuarios.php";

//Verificacion de CAPTCHA
if (!empty($_POST['rand_code']) ){

    if ( $_POST['rand_code']==$_SESSION['rand_code'] ){ 
        if (!empty($_POST) && $_POST['bt_submit']){	

                $user_in=$_POST['usuario'];     //fijarse que no haya caracteres no permitidos         
                $pass_in=$_POST['contrasenia']; // para mejorar la seguridad

                $user_sql = new usuarios;
                

                if( $id_user = $user_sql->autenticate($user_in, $pass_in)){
                                     
                    $_SESSION['infoTienda']['id_user']= $id_user;
                    $_SESSION['infoTienda']['username']= $user_in;
                    
                    header('Location: ./inicio.php');
                    
                }else{ //si los datos no son válidos
                    
                    session_destroy();
                    echo "<script>
                    alert('No se pudo autenticar!');
                    window.location.replace('./login.php');
                        </script>";
                }
        }
        else{
            session_destroy();
            echo "<script>
            alert('No submitiste el formulario de login.');
            window.location.replace('./login.php');
                </script>";
        }
    }
    else{
        session_destroy();
        echo "<script>
            alert('Los captcha no coinciden');
            window.location.replace('./login.php');
                </script>";
        
    }
}
?>