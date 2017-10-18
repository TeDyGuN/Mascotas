@extends('Plantilla/plantilla')

@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Inicio</li><li>Modificar de Usuario</li>
        </ol>
    </div>
    <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row" >
            <div class="">
                <div class="panel panel-default" id="panel-alcaldia">
                    <div class="panel-heading text-center textoHeader">Modificacion de Usuario</div>
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
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('user/saveModificarUsuario') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                                    <label for="nombres" class="col-md-4 control-label">Nombres</label>

                                    <div class="col-md-6">
                                        <input id="nombres" type="text" class="form-control" name="nombres" value="{{ $user->nombre }}">

                                        @if ($errors->has('nombres'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                                    <label for="apellidos" class="col-md-4 control-label">Apellidos</label>

                                    <div class="col-md-6">
                                        <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ $user->apellido }}">

                                        @if ($errors->has('apellidos'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }}">
                                    <label for="ci" class="col-md-4 control-label">Cedula de Identidad</label>

                                    <div class="col-md-6">
                                        <input id="ci" type="text" class="form-control" name="ci" value="{{ $user->ci }}">

                                        @if ($errors->has('ci'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('ci') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                    <label for="direccion" class="col-md-4 control-label">Dirección</label>

                                    <div class="col-md-6">
                                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{ $user->direccion }}">

                                        @if ($errors->has('direccion'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                    <label for="telefono" class="col-md-4 control-label">Celular</label>

                                    <div class="col-md-6">
                                        <input id="telefono" type="number" class="form-control" name="telefono" value="{{ $user->telefono }}">

                                        @if ($errors->has('telefono'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i> Modificar Usuario
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <br><br>
                        {{$success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                <strong>!!Felicidades!!</strong>Se Creo el usuario Correctamente <br><br>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addscripts')
    <script type="text/javascript">
        function justNumbers(e)
        {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
                return true;

            return /\d/.test(String.fromCharCode(keynum));
        }

    </script>
@endsection