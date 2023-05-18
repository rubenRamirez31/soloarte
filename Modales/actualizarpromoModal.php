<!-- Modal -->
<div class="modal fade" id="actualizarpromoModal" tabindex="-1" aria-labelledby="actualizarpromoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="actualizarpromoModalLabel">Actualizar Promocion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="../../Transacciones/Promociones/actualizar.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion: </label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link: </label>
                        <input type="number" name="link" id="link" class="form-control" required>
                    </div>

                    <div class="row justify-content-end">
                        <div style="display: flex; justify-content: end;">
                            <button type="button" class="btn btn-danger" style="margin-right: 5px;" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="margin-right: 2px;"></i>Cancelar</button>
                            <button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk" style="margin-right: 2px;"></i> Confirmar</button>
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>