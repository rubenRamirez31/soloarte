<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header("Location: NoAutenticado.php");


    }

    if ($_SESSION['idUsuRol'] != 1) {

        header("Location: NoAutorizado.php");

    }
       
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Promociones</title>
    <?php
    include("../../Layout/estilos.php");
    ?>
</head>

<body>

    <div class="container">
        <form action="../../Transacciones/Promociones/AgregarPromociones.php" method="post" enctype="multipart/form-data">
            
            
            <h3 class="text-center text-primary">Agregar Promocion</h3>

            <div class="row">
                <div class="col-md-6">
                    <label for="txtPromicion">Ingresa el nombre corto de la promocion</label>
                    <textarea name="promocion" id="txtPromicion" class="form-control"></textarea>
                    
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <label for="txtDescripcion">Ingrese la Descripcion de la promocion</label>
                    <textarea name="descripcionPromocion" id="txtDescripcion" class="form-control"></textarea>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="imgFotoCreador" class="form-label">Seleccione una imagen referente a la promocion</label>
                        <input class="form-control" type="file" id="imgFotoCreador" name="fotoCreador">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="txtLink">Agrega el link de la promocion</label>
                    <textarea name="linkPromocion" id="txtLink" class="form-control"></textarea>

                </div>
            </div>


            <div class="mt-3">
                <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                <a href="Principal.php" class="btn btn-lg btn-outline-info">Regresar</a>
                <a href="MostrarPromociones.php" class="btn btn-lg btn-outline-info">Mostrar Creadores</a>
               
            </div>


        </form>
    </div>



    <?php
    include("../Layout/scripts.php");
    ?>
</body>

</html>