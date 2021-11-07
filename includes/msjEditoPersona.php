<?php
 if(!isset($_SESSION)){ //Si no hay sesion iniciarla
    session_start();
}
 require_once 'Page.php';

    $body='<div style="width:60%;margin-left:auto;margin-rigth:auto" >

                <div class="card border-success mb-3" style="max-width: 20rem">
                    <div class="card-header">Operación Exitosa</div>
                        <div class="card-body">
                            <h5 class="card-title text-success">Persona editada</h5>
                            <p class="card-text">Los datos de la persona se editaron correctamente.</p>
                        </div>
                        <div class="card-footer bg-transparent border-success">
                        <a href="../index.php" class="btn btn-success">Continuar</a>
                        </div>
                </div>

           </div>';
 
$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();

?>