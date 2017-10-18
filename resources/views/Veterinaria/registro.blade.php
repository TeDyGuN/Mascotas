@extends('Plantilla/plantilla')

@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Inicio</li><li>Registro de Veterinaria</li>
        </ol>
    </div>
    <div class="container">
        <div class="row" >
            <div class="">
                <div class="panel panel-default" id="panel-alcaldia">
                    <div class="panel-heading text-center textoHeader">Registro Nueva Veterinaria</div>
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
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('veterinaria/save')  }}"  >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="nombres" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Nombre</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="nombres" name="nombres"  required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="direccion" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Direccion</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="direccion" name="direccion"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telefono" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Telefono</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="telefono" name="telefono"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="archivo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Imagen de Referencia</label>
                                    <div class="col-md-3">
                                        <input type="file" required name="archivo" id="archivo"/>
                                    </div>
                                    <label for="archivo" class="col-md-3 control-label colorazul">Solo Archivos de Imagen: .jpg .bmp .png</label>
                                </div>
                                <div class="form-group">
                                    <label for="otros" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Descripcion de los Servicios</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="otros" name="otros"  required></textarea>
                                    </div>
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
                                <strong>!!Felicidades!!</strong>Se Registro a la Mascota Correctamente <br><br>
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