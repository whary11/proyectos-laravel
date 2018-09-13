@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <p>Dashboard</p>
                  <img src="{{Auth::user()->avatar}}" alt="">
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <p>Ahora estás logueado</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
