<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form v-on:submit.prevent="actualizarProducto(editProducto.id)">
          <div class="form-group">
            <label for="nombre1">Nombre</label>
            <input type="text" class="form-control" id="nombre1" name="nombre1" aria-describedby="emailHelp" placeholder="Nombre del producto" v-model="editProducto.nombre">
          </div>
          <div class="form-group">
            <label for="descripcion1">Descripción</label>
            <input type="text" class="form-control" name="descripcion1" id="descripcion1" placeholder="Descripción del producto" v-model="editProducto.descripcion">
          </div>
          <div class="form-group">
            <label for="precio1">Precio</label>
            <input type="number" class="form-control" name="precio1" id="precio1" placeholder="Precio del producto" v-model="editProducto.precio">
          </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      <p class="text-center font-weight-normal">lraga, Copyright &copy; 2018</p>
    </div>
  </div>
</div>