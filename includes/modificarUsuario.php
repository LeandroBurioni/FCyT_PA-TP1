<?php
 require_once 'Page.php';
if(!isset($_SESSION)){ //Si no hay sesion iniciarla
//    session_start();
    $id_user=$_SESSION['infoTienda']['id_user'];
     header('Location: ../index.php');   
}
    if (!empty($_POST) )
    {
        require_once ('modelUsuarios.php');

        $user = new usuarios();
        $user->set_username($_POST['username']);
        $user->set_email($_POST['email']);
        $user->set_telefono($_POST['telefono']);
        $user->set_nombre_tienda($_POST['nombre_tienda']);
        $user->set_descripcion_tienda($_POST['descripcion_tienda']);
       
        $infoTienda = $user->get_InfoTienda();
        $_SESSION['infoTienda']=$infoTienda;
 

        $user->update();
        

        header('Location: msjEditoPersona.php');

    }
    else{
        echo "no ingresa";
    }

?>