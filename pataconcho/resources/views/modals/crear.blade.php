<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form v-on:submit.prevent="crearProducto()">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" v-model="newProducto.nombre" placeholder="Nombre del producto">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" v-model="newProducto.descripcion" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción del producto">
          </div>
          <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" v-model="newProducto.precio" name="precio" id="precio" placeholder="Precio del producto">
          </div>
          <button type="submit" class="btn btn-primary" >Crear</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      <p class="text-center font-weight-normal">lraga, Copyright &copy; 2018</p>
    </div>
  </div>
</div>
{{-- Queso y salsa de la casa --}}
{{-- Unn delicioso partac+on con queso y salsa de la casa. --}}
{{-- {{ Auth::user()->id }} --}}