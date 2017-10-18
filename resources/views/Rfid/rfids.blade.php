@extends('Plantilla/plantilla')

@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Inicio</li><li>Creacion RFID Masivo</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default" id="panel-alcaldia">
                    <div class="panel-heading textoHeader">Crear NFC Masivo</div>
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
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('rfids/save')  }}"  >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="numero" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Numero de Codigos:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="numero" name="numero"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="archivo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Archivo</label>
                                <div class="col-md-3">
                                    <input type="file" required name="archivo" id="archivo"/>
                                </div>
                                <label for="archivo" class="col-md-3 control-label colorazul">Solo Archivos Excel: .xls .xlsx</label>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary center-block">
                                    Crear Codigos
                                </button>
                            </div>
                        </form>
                        <br><br>
                        {{$success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                <strong>!!Felicidades!!</strong>Se Crearon RIFD Masivamente <br><br>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
