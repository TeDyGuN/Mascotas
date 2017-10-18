@extends('Plantilla/plantilla')

@section('content')

    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Inicio</li><li>Reporte Usuario</li>
        </ol>
    </div>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>

<script src="{{ asset('/vendor/datatables/buttons.server-side.js') }}"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nombre', name: 'nombre' },
                { data: 'apellido', name: 'apellido' },
                { data: 'email', name: 'email' },
                { data: 'direccion', name: 'direccion' },
                { data: 'telefono', name: 'telefono' }
            ],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'csv'
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            }


        });
    });
</script>
@endpush