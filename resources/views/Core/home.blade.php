@extends('Plantilla/plantilla')
@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Inicio</li>
        </ol>
    </div>
    <div id="content">
        <div class="col-md-12">
            <img src="{{ asset('images/gmlp.jpg') }}" class="img-responsive img-alcaldia2">
        </div>
        <h1 class="text-center">Sistema de Monitoreo y Control de Mascotas</h1>
    </div>
@endsection