<div class="modal fade" id="modal_modificar" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Modificar Persona</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times text-white"></i>
        </button>
      </div>

      <form method="POST">
        <div class="modal-body">

          <input type="number" name="idpersona_m" class="form-control ocultar" id="idpersona_m">

          <div class="form-group">
            <input type="text" name="nombres_m" class="form-control" id="nombres_m">
          </div>

          <div class="form-group">
            <input type="text" name="apellidos_m" class="form-control" id="apellidos_m">
          </div>

          <div class="form-group">
            <input type="date" name="fecha_nacimiento_m" class="form-control" id="fecha_nacimiento_m">
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Modificar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

          <?php $request = $personaController->modificarUsuario(); ?>
          <?php if ($request) { ?>
            <script type="text/javascript">
              window.location.href = "Persona";
            </script>
          <?php } ?>
        </div>
      </form>
    </div>
  </div>
</div>