@extends('layouts.app')
@section('csss')
    {{-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos agregados</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover" id="mitabla">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Descripción</th>
                          <th scope="col">Creador</th>
                          <th scope="col">Editar</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($productos as $producto)
                          <tr>
                            <th scope="row">{{ $producto->id }}</th>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $usuario->userName }}</td>
                            <td><a href="#"><i class="material-icons">mode_edit</i></a></td>
                            <td><a href="#"><i class="material-icons">delete</i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                      {{-- {{  dd($productos) }} --}}

                    {{-- Mostrando {{ count($productos) }} productos de {{ $total }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#mitabla').DataTable();

            console.log('Vamos !!')
        });
    </script> --}}
@endsection
