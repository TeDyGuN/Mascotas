@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default" id="panel-alcaldia">
                    <div class="panel-heading textoHeader">Resultado de Busqueda de Mascota</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th colspan="2" class="text-center textoHeader">Datos de la Mascota</th>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <img src="{{ asset('storage/').'/'.$mascota[0]->imagen }}" height="450px" class="center-block">
                                </td>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <td>{{ $mascota[0]->nombre }}</td>
                            </tr>
                            <tr>
                                <th>Raza</th>
                                <td>{{ $mascota[0]->raza }}</td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>{{ $mascota[0]->color }}</td>
                            </tr>
                            <tr>
                                <th>Peso</th>
                                <td>{{ $mascota[0]->peso }} Kg.</td>
                            </tr>
                            <tr>
                                <th>Esterilizado</th>
                                <td>{{ $mascota[0]->esterilizado }}</td>
                            </tr>
                            <tr>
                                <th>Descripcion</th>
                                <td>{{ $mascota[0]->descripcion }}</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center textoHeader">Datos del Dueño</th>
                            </tr>
                            <tr>
                                <th>Nombres</th>
                                <td>{{ $mascota[0]->dnombre }}</td>
                            </tr>
                            <tr>
                                <th>Apellidos</th>
                                <td>{{ $mascota[0]->dapellido }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $mascota[0]->demail }}</td>
                            </tr>
                            <tr>
                                <th>Ci</th>
                                <td>{{ $mascota[0]->dci }}</td>
                            </tr>
                            <tr>
                                <th>Direccion</th>
                                <td>{{ $mascota[0]->direccion }}</td>
                            </tr>
                            <tr>
                                <th>Telefono</th>
                                <td>{{ $mascota[0]->dtelefono }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection