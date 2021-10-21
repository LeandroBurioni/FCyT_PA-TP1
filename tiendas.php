<?php 
 
  session_start();

include('./includes/header.php'); ?>

<div class="container">
    <div class="row">
    <div class="col-md-4">
           <div class="card mb-4 shadow-sm border">
            <!--                    Si vamos a aceptar imagenes podemos usar lo siguiente, sino lo de abajo nomas
                <a>     
             <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ auction.url_image }}" role="img">
             <title>Ejemplo Producto</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Ejemplo Producto</text>
            </a>-->
             <div class="card-body">
                    <!-- En el siguiente <a> hacer un onclick a la API de WhatsApp para mandar mensaje a la tienda-->
                    <a class="title" href=""><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Ejemplo Producto</text></a>
                 <p class="card-text">
                     <h4 class="price">Ejemplo de Precio: $0</h4>
                     <h6 class="owner">Tienda de Ejemplo</h6>

                 </p>
                 <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Fecha de Publicacion</small>
                  </div>
             </div>
            </div>     



        </div>
    </div>

</div>

<?php include('./includes/footer.php'); ?>