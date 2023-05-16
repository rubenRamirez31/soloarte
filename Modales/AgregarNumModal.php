<!-- Modal -->
<div class="modal fade" id="AgregarNumModal" tabindex="-1" aria-labelledby="AgregarNumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="AgregarNumModalLabel">Agrega tu numero</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../Transacciones/AgregarNumU.php" method="POST">
                    <input type="hidden" name="id" id="id">
                    <input type="text" name="telefono" id="txtnum" class=" form-control">
                    <button type="button" class="btn btn-success" style="margin-right: 5px;" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="margin-right: 2px;"></i>Cancelar</button>
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>