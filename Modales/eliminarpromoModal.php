<!-- Modal -->
<div class="modal fade" id="eliminarpromoModal" tabindex="-1" aria-labelledby="eliminarpromoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="eliminarpromoModalLabel text-center text-warning">Atención!!!!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text text-center">¿Desea eliminar la promocion?</p>
                
            </div>
            <div class="modal-footer">
                <form action="../../Transacciones/Promociones/eliminar.php" method="POST">
                    <input type="hidden" name="id" id="id">
                    <button type="button" class="btn btn-success" style="margin-right: 5px;" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="margin-right: 2px;"></i>Cancelar</button>
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>