<!-- Modal -->
<div class="modal fade" id="agregarpromoModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="agregarModalLabel">Agregar Promocion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../Transacciones/Promociones/agregar.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion: </label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Link: </label>
                        <input type="number" name="precio" id="precio" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <p class="text text-danger text-center text-uppercase" style="font-weight: bold;">Las imagenes se podrán agregar una vez se halla agregado la promocion</p>
                    </div>

                    <div class="row justify-content-end">
                        <div style="display: flex; justify-content: end;">
                            <button type="button" class="btn btn-danger" style="margin-right: 5px;"
                                data-bs-dismiss="modal"><i class="fa-solid fa-xmark"
                                    style="margin-right: 2px;"></i>Cancelar</button>
                            <button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk"
                                    style="margin-right: 2px;"></i> Agregar</button>
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>