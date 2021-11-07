<?php

class Page{
    private $header;
    private $menu;
    private $body;
    private $footer;

    function __construct(){
       $this->setHeader();
       $this->setMenu();
       $this->setFooter();
    }


    private function setHeader(){
        $this->header=' <!DOCTYPE html>
        <html lang="es">
        
            <head>
        
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Vitreaux: Feria Online</title>
                <link rel="icon" type="image/png" href="./imagenes/favicon.png">
                <link rel="stylesheet" href="./css/estilos.css">
        
                <!-- Bootstrap CSS & js -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
            </head>
            <body>';
    }

    private function setMenu(){
        $this->menu='<nav class="navbar navbar-expand-lg navbar-dark">';
        if(isset($_SESSION['infoTienda'])){        //Si inicio sesion, redirigir a inicio.php
            $this->menu.='<a class="navbar-brand" href="./inicio.php">
                <img src="./imagenes/Logo3.png" alt="Logo Feria Online" width="200" height="auto" class="d-inline-block align-center">
                </a>';
        }
        else{
            $this->menu.='<a class="navbar-brand" href="./index.php">
                <img src="./imagenes/Logo3.png" alt="Logo Feria Online" width="200" height="auto" class="d-inline-block align-center">
            </a>';
        }
        $this->menu.='<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
                <a  href="./quienes-somos.php">Quienes somos?</a>
            </li>';
        if(isset($_SESSION['infoTienda'])){
            $this->menu.='
                        <li class="nav-item">
                            <a href="./mi_tienda.php">Mis Productos</a>
                        </li>
                        <li class="nav-item">
                        <a href="./cargarProducto.php">Cargar Producto</a>
                        </li>
                        <li class="nav-item">
                    <a class="user" href="./opcionesUsuario.php"> Usuario: ';
                    $this->menu.=$_SESSION['infoTienda']['username'].' </a>
                    <li class="nav-item">
                    <a href="logout.php" role="button">Cerrar Sesión</a>
                        </li>';
                }
                else{ 
                    $this->menu.= '<li class="nav-item">
                    <a href="./login.php">Iniciar Sesion</a>
                    </li>';
                }                      
        $this->menu.='</ul>
    
        </div>
        </nav>
    
        <div>';
    }

    public function setBody($body){
        $this->body=$body;
    }

    private function setFooter(){
        $this->footer='	
	            <div class="footer">		
                <a>Realizado por Rodrigo Richard y Leandro Burioni</a><br>
                <small>para Programacion Avanzada - FCyT UADER</small>
                </div>
            </div>
            </body>
            </html>';
    }


    public function getHtml(){
        $Pagina=$this->header;
        $Pagina.=$this->menu;
        $Pagina.=$this->body;
        $Pagina.=$this->footer;
        return $Pagina;
    }


}