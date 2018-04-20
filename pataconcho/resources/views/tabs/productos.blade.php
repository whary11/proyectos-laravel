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
						    <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						      <td>
						      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar">
								  Editar
								</button>
						      </td>
						      <td>
						      	<a href="#" class="btn btn-danger">
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