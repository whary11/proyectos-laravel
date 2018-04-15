@extends('layouts.app')
@section('content')
<div class="container">
	<form class="form-row mx-auto" action="/productos/guardar" method="post" id="gproduct">
	  <div class="form-group col-sm-5 align-self-center">
	    <label for="nombre">Nombre</label>
	    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="producto" placeholder="Nombre del producto">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>

	  <div class="form-group col-sm-5">
	    <label for="desproduct">Descrpción</label>
	    <input type="text" name="desproduct" class="form-control" id="desproduct" aria-describedby="emailHelp" placeholder="Descripción del producto">
	    <small id="emailHelp" class="form-text text-muted">Dar una descripción corta del producto.</small>
	  </div>

	  <div class="col-sm-5">
  		<button type="submit" class="btn btn-primary">Guardar</button>
	  </div>
	  {{ csrf_field() }}
	</form>	
</div>
@endsection
@section('scripts')
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function($) {



			// let producto = $('#gproduct')
			// producto.submit(function(event) {
			// 	let data = producto.serialize();
			// 	// console.log(producto.serialize());
			// 	event.preventDefault();

			// 	$.ajax({
			// 		url: producto.attr('action'),
			// 		type: 'POST',
			// 		dataType: 'html',
			// 		data: data,
			// 	})
			// 	.done(function(data) {
			// 		console.log(data);
			// 	})
			// 	.fail(function() {
			// 		console.log("error");
			// 	})
			// 	.always(function() {
			// 		console.log("complete");
			// 	});
				


			// });
		});
	</script>
@endsection