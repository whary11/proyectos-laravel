@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#productos" role="tab" aria-controls="v-pills-home" aria-selected="true">Productos</a>
	  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#facturas" role="tab" aria-controls="v-pills-profile" aria-selected="false">Facturas</a>
	  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#facturas" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
	  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
	</div>




	<div class="tab-content col-md-10" id="v-pills-tabContent">
	  <div class="tab-pane fade show active" id="productos" role="tabpanel" aria-labelledby="v-pills-home-tab">
	    {{-- Vista de productos --}}
	            @include('tabs.productos')
	  </div>
	  <div class="tab-pane fade" id="facturas" role="tabpanel" aria-labelledby="v-pills-profile-tab">
		{{-- Vista para generar facturas --}}
		@include('tabs.factura')

	  </div>
	  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
	  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
	</div>
</div>
	</div>
@endsection
