<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include '../../Layout/estilos.php'  ?>
	<title>SoloArte</title>
</head>

<body>
	<?php include '../../Layout/navbarU.php';

	session_start();
	?>


	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Mi tienda</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAVBAR -->



	<!-- MODAL CARRITO -->
	<div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">



					<div class="modal-body">
						<div>
							<div class="p-2">
								<ul class="list-group mb-3">
									<?php
									if (isset($_SESSION['carrito'])) {
										$total = 0;
										for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
											if ($carrito_mio[$i] != NULL) {

									?>
												<li class="list-group-item d-flex justify-content-between lh-condensed">
													<div class="row col-12">
														<div class="col-6 p-0" style="text-align: left; color: #000000;">
															<h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; 
																																	?></h6>
														</div>
														<div class="col-6 p-0" style="text-align: right; color: #000000;">
															<span style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> €</span>
														</div>
													</div>
												</li>
									<?php
												$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
											}
										}
									}
									?>
									<li class="list-group-item d-flex justify-content-between">
										<span style="text-align: left; color: #000000;">Total (EUR)</span>
										<strong style="text-align: left; color: #000000;"><?php
																							if (isset($_SESSION['carrito'])) {
																								$total = 0;
																								for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
																									if ($carrito_mio[$i] != NULL) {
																										$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
																									}
																								}
																							}
																							echo $total; ?> €</strong>
									</li>
								</ul>
							</div>
						</div>
					</div>



				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL CARRITO -->



	<!-- MODAL CARRITO -->
	<div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">



					<div class="modal-body">
						<div>
							<div class="p-2">
								<ul class="list-group mb-3">
									<?php
									if (isset($_SESSION['carrito'])) {
										$total = 0;
										for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
											if ($carrito_mio[$i] != NULL) {

									?>
												<li class="list-group-item d-flex justify-content-between lh-condensed">
													<div class="row col-12">
														<div class="col-6 p-0" style="text-align: left; color: #000000;">
															<h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; 
																																	?></h6>
														</div>
														<div class="col-6 p-0" style="text-align: right; color: #000000;">
															<span style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> €</span>
														</div>
													</div>
												</li>
									<?php
												$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
											}
										}
									}
									?>
									<li class="list-group-item d-flex justify-content-between">
										<span style="text-align: left; color: #000000;">Total (EUR)</span>
										<strong style="text-align: left; color: #000000;"><?php
																							if (isset($_SESSION['carrito'])) {
																								$total = 0;
																								for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
																									if ($carrito_mio[$i] != NULL) {
																										$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
																									}
																								}
																							}
																							echo $total; ?> €</strong>
									</li>
								</ul>
							</div>
						</div>
					</div>



				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL CARRITO -->




	<?php include '../../Conection/cn.php' ?>



	<div class="container mt-4">

		<h1 class="text text-center">Productos</h1>

        
 
<?php
session_start();
    $query = "select * from productos";
    $productos = $db->query($query); 
?>
 
<div class='row'>
            <?php while ($row_productos = $productos->fetch_assoc()) :  ?>
                <div class='col-4 mt-4'>
                    <div class='card' style='width: 18rem;'>
                    
                        <ul class='list-group list-group-flush'>
                        
                            <li class='list-group-item'> <span style="font-weight: bold;"></span> <?php echo $row_productos['nombre'];?></li>
                          
                            <li class='list-group-item'> <span style="font-weight: bold;">Precio:</span> <?php echo $row_productos ['precio']; ?></li>
                            
                            <li class='list-group-item'> <span style="font-weight: bold;">En stock:</span> <?php echo $row_productos ['stock']; ?><span></span></li>
                           
                            <button class="btn btn-success" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                            <a href='../Usuario/DetallesProducto.php?idProducto= <?php echo $row_productos ['id_producto']; ?>' class='btn btn-primary'>Mas Detalles</a> 


								</span>



							</ul>
						</div>
					</div>
				<?php endwhile ?>
			</form>
		</div>

	</div>

	<?php include '../../Layout/scripts.php' ?>


</body>

</html>