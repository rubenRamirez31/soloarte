<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>Crear Solicitud</title>
</head>

<body>
    <?php include '../../Layout/navbarU.php' ?>
    <div class="d-flex justify-content-center">
        <div class="col-6 mt-5">

            <h1 class="text text-center">¿Quieres trabajar con nosotros?</h1>
            <h4 class="text text-center mb-3">Completa los siguientes campos para poder conocer un poco mas de ti</h4>

            <form action="../../Transacciones/enviarsolicitud.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="p1" class="form-label">¿Cuál es tu experiencia previa en la industria de distribución de artesanías o productos similares?</label>
                    <input type="text" name="p1" id="p1" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p2" class="form-label">¿Cuál es tu conocimiento sobre las distintas técnicas artesanales utilizadas en México?</label>
                    <input type="text" name="p2" id="p2" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p3" class="form-label">¿Cuál es tu enfoque para garantizar que los productos sean auténticos y representen fielmente la cultura mexicana?</label>
                    <input type="text" name="p3" id="p3" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p4" class="form-label">¿Cómo te mantendrías actualizado/a sobre las últimas tendencias y demandas en el mercado de las artesanías mexicanas?</label>
                    <input type="text" name="p4" id="p4" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p5" class="form-label"> ¿Qué valor añadido crees que podrías aportar a la empresa en términos de asegurar la calidad de las artesanías y mejorar la experiencia del cliente?
                    </label>
                    <input type="text" name="p5" id="p5" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="imagenes" class="form-label">Sube al menos 3 imagenes de tu trabajo</label>
                    <input type="file" name="imagenes[]" id="imagenes" class="form-control" multiple accept=".jpg, .png" id="file-input" required>
                    <div class=" d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-warning mt-1" id="btnlimpiar">Limpiar</button>
                    </div>
                </div>


                <div class="d-flex justify-content-end">
                    <div class="mb-3">
                        <a href="PerfilUsuario.php" class="btn btn-outline-danger">Cancelar</a>
                        <button type="submit" class="btn btn-outline-dark">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        var btnlimpiar = document.getElementById('btnlimpiar');
        var fileInput = document.getElementById('file-input');

        btnlimpiar.addEventListener('click', function() {
            fileInput.value = '';
        })
    </script>

    <?php include '../../Layout/scripts.php' ?>

</body>

</html>