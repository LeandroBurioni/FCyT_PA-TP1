<?php 
  require_once './includes/Page.php';
  session_start();
  include_once "./includes/modelProductos.php";
  //print_r($_SESSION['infoTienda']);
  $productos = new productos;
  $allProd = $productos->getProductos_Tienda($_SESSION['infoTienda']['id_user']);
 // print_r($allProd);
  
        
        $resultado = $productos->getall();
$filas='';

         // $fila = mysqli_fetch_assoc($allProd);

      while ( $producto = $allProd->fetch_assoc() ) 
      {
         $filas.='<tr>';
            $filas.='<td scope="row">'.$producto["titulo"].'</td>';
            $filas.='<td>'.$producto["descripcion"].'</td>';
            $filas.='<td>'.$producto["precio"].'</td>';
            '<td><a href="index.php?opt=edit&idPersona='.$producto["id_user"].'" class="btn btn-outline-warning btn-sm">editar</a></td>';
            '<td><a href="index.php?opt=delete&idPersona='.$producto["id_user"].'" class="btn btn-outline-danger btn-sm">borrar</a></td>';
         $filas.='</tr>';

      }
   
   //else{
     // $filas='<tr><td colspan="7">No existen datos que mostrar</td></tr>';
   //}
 
   $body = '<table class="table table-striped">
               <thead>
                  <tr>
                  <th scope="col">titulo</th>   
                  <th scope="col">descripcion</th>                     
                     <th scope="col">precio</th>  
                     <th scope="col"></th>
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>'.$filas.'</tbody>
            </table>';


$oPage=new Page();

      $oPage->setBody($body);

    echo $oPage->getHtml();

?>