@extends('Plantilla/plantilla')

@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Inicio</li><li>Buscar Mascota</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default" id="panel-alcaldia">
                <div class="panel-heading textoHeader" >Busqueda de mascotas</div>
                <div class="panel-body">
                    <form action="{{ url('/mascota/Mbuscar') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('rfid') ? ' has-error' : '' }}">
                            <label for="rfid" class="col-md-4 control-label">Codigo RFID</label>

                            <div class="col-md-6">
                                <input id="rfid" type="text" class="form-control" name="rfid" value="{{ old('rfid') }}">

                                @if ($errors->has('rfid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rfid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group" style="padding-top: 50px;">
                            <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Buscar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
