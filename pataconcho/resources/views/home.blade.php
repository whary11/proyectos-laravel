@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<h1 class="float-left">Panel</h1>
                	<div class="btn-group float-right" role="group" aria-label="Basic example">
					  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear" style="font-size: 20px;">+</button>
					</div>
            	</div>

                <div class="card-body" id="app">
                    <table class="table table-hover">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					      <th scope="col">Handle</th>
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
					      	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar">
							  Eliminar
							</button>
					      </td>
					    </tr>
					  </tbody>
					</table>
					@include('modals.editar')
					@include('modals.eliminar')
					@include('modals.crear')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
