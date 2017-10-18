@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="table-responsive">
            <div class="panel panel-default" id="panel-alcaldia">
                <div class="panel-heading textoHeader">Resultado Veterinarias</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>

                            <th colspan="" class="text-center textoHeader">Logo</th>
                            <th colspan="" class="text-center textoHeader">Nombre</th>
                            <th colspan="" class="text-center textoHeader">Direccion</th>
                            <th colspan="" class="text-center textoHeader">Telefono</th>
                            <th colspan="" class="text-center textoHeader">Descripcion</th>
                        </tr>
                        @foreach($vet as $v)
                            <tr>
                                <td colspan="" width=55%>
                                    <img src="{{ asset('storage/').'/'.$v->imagen }}" width="400px" class="center-block">
                                </td>
                                <td width=10%>
                                    {{ $v->nombre }}
                                </td>
                                <td width=10%>
                                    {{ $v->direccion }}
                                </td>
                                <td width=5%>
                                    {{ $v->telefono }}
                                </td>
                                <td width=20%>
                                    {{ $v->descripcion }}
                                </td>
                            </tr>
                        @endforeach
                        {{--<tr>--}}
                            {{--<td colspan="2">--}}
                                {{--<img src="{{ asset('storage/').'/'.$mascota[0]->imagen }}" height="450px" class="center-block">--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<th>Nombre</th>--}}
                            {{--<td>{{ $mascota[0]->nombre }}</td>--}}
                        {{--</tr>--}}

                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
