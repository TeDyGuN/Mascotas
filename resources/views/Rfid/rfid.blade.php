@extends('Plantilla/plantilla')

@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Inicio</li><li>Creacion RFID</li>
        </ol>
    </div>
    <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row" >
            <div class="">
                <div class="panel panel-default" id="panel-alcaldia">
                    <div class="panel-heading text-center textoHeader ">Creacion de Registro RFID</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Hay problemas con tus Entradas<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('rfid/save')  }}"  >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="codigo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Codigo</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="codigo" name="codigo"  required>
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary center-block">
                                    Registrar
                                </button>
                            </div>
                        </form>
                        <br><br>
                        {{$success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                Se Creo el codigo RFID Correctamente <br><br>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
