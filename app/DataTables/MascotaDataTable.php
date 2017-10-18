<?php

namespace App\DataTables;

use App\Mascota;
use App\User;
use Yajra\Datatables\Services\DataTable;

class MascotaDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        //$query = Mascota::select();
	    $query = Mascota::join('rfids as c', 'id_rfid', '=', 'c.id');
//	                          ->select('c.nombre as cnombre', 'asignaturas.nombre', 'asignaturas.id')
//	                          ->where('id_docente','=', Auth::user()->id)

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
//        return $this->builder()
//                    ->columns($this->getColumns())
//                    ->ajax('')
//                    ->addAction(['width' => '80px'])
//                    ->parameters($this->getBuilderParameters());
	    return $this->builder()
	                ->columns([
		                'nombre',
		                'raza',
		                'color',
		                'peso',
		                'esterilizado',
		                'codigo' => [ 'title' => 'RFID' ],
		                'dnombre' => [ 'title' => 'Nombre Dueño' ],
		                'dapellido' => [ 'title' => 'Apellido Dueño' ],
		                'dci' => [ 'title' => 'C.I. Dueño' ],
		                'demail' => [ 'title' => 'Email' ],
		                'direccion' => [ 'title' => 'Direccion' ],
		                'dtelefono' => [ 'title' => 'Telefono' ],

	                ])
	                ->parameters([
		                'dom' => 'Bfrtip',
		                'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
		                'language'=> [ 'url'=> "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"]
	                ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            // add your columns
            'created_at',
            'updated_at',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Reporte_Mascota' . time();
    }
}
