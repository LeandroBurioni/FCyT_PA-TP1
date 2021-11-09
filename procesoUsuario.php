<?php
if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
} 
include_once "./includes/modelUsuarios.php";
$user= new usuarios;

if($_GET["opt"]=='registrar'){ 
    
    if($user->existeUsuario($_POST['username'])){
       header('Location: ./registrate.php'); 
    }
    else{
        $user->save($_POST['username'], $_POST['password'], $_POST['email'], $_POST['nombre_tienda'], $_POST['descripcion_tienda'], $_POST['telefono']);
        header('Location: ./inicio.php');        
    }

}
elseif(!empty($_SESSION['infoTienda'])){
    if(($_GET["opt"] == 'modificar_datos') && ($_GET["id_user"] == $_SESSION['infoTienda']['id_user'])){ //No necesario pero para seguridad
        $user->update($_GET["id_user"], $_POST['telefono'], $_POST['username'], $_POST['email'], $_POST['nombre_tienda'], $_POST['descripcion_tienda']);
        header('Location: ./opcionesUsuario.php');
        
    }

    if(($_GET["opt"] == 'eliminar') && ($_GET["id_user"] == $_SESSION['infoTienda']['id_user'])){  
        if($user->delete($_GET["id_user"])){
            session_destroy();
            header('Location: ./index.php');}
    }
    elseif(($_GET["opt"] == 'eliminar') && ($_GET["id_user"] != $_SESSION['infoTienda']['id_user'])){

        echo "Vos no sos el usuario que queres borrar/modificar! La policia esta yendo a tu casa.";
    }
    
}
?>