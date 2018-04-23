<div class="card">
    <div class="card-header">
    	<h1 class="float-left">Panel</h1>
    	<div class="btn-group float-right" role="group" aria-label="Basic example">
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear" style="font-size: 20px;">+</button>
		</div>
	</div>

    <div class="card-body table-responsive" id="app">
        <table class="table table-hover">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Descripción</th>
		      <th scope="col">Precio</th>
		      <th scope="col">Editar</th>
		      <th scope="col">Eliminar</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr v-for="producto in productos">
		      <th scope="row">@{{ producto.id }}</th>
		      <td>@{{ producto.nombre }}</td>
		      <td>@{{ producto.descripcion }}</td>
		      <td>@{{ producto.precio }}</td>
		      <td>
		      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar" v-on:click.prevent="llenarModals(producto)">
				  Editar
				</button>
		      </td>
		      <td>
		      	<a href="#" v-on:click.prevent="eliminarProducto(producto)" class="btn btn-danger">
				  Eliminar
				</a>
		      </td>
		    </tr>
		  </tbody>
		</table>
		@include('modals.editar')
		@include('modals.crear')
    </div>
</div>