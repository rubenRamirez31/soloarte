<!-- Modal -->
<div class="modal fade" id="agregarimgpromoModal" tabindex="-1" aria-labelledby="agregarimgpromoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="agregarimgpromoModalLabel">Agregar Imagegen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <form action="../../Transacciones/Promociones/imagen.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <label for="file-input">Sube Tus Archivos</label>
                    <input type="file" name="imagenes[]" class="form-control" multiple accept=".jpg, .png" id="file-input" required>
                    <div class="mt-2 d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-danger" style="margin-right: 5px;" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="margin-right: 2px;"></i>Cancelar</button>
                        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var btnlimpiar = document.getElementById('btnlimpiar');
    var fileInput = document.getElementById('file-input');

    btnlimpiar.addEventListener('click', function() {
        fileInput.value = '';
    })

    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 1) {
            Swal.fire(
                'Solo se puede subir un archivo',
                '',
                'error'
            );
            fileInput.value = ''; // Limpia la selección de archivos
        }
    });
</script>