<?php 

if(isset($_SESSION['carrito'])){
$carrito_mio=$_SESSION['carrito'];
}

// contamos nuestro carrito
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if(isset($carrito_mio[$i])){
        if($carrito_mio[$i]!=NULL){ 
        if(!isset($carrito_mio['cantidad'])){$carrito_mio['cantidad'] = '0';}else{ $carrito_mio['cantidad'] = $carrito_mio['cantidad'];}
        $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    if(!isset($totalcantidad)){$totalcantidad = '0';}else{ $totalcantidad = $totalcantidad;}
    $totalcantidad += $total_cantidad;
    }}}
}

    //declaramos variables
     if(!isset($totalcantidad)){$totalcantidad = '';}else{ $totalcantidad = $totalcantidad;}

?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: white;">
<div class="container-fluid">

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red; cursor:pointer;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
        </li>

  </div>
</nav>
<!-- END NAVBAR -->