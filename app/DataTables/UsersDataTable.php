<?php

namespace App\DataTables;

use App\User;
use Yajra\Datatables\Services\DataTable;

class UsersDataTable extends DataTable
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
        $query = User::select();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
	    return $this->builder()
	                ->columns([
		                'nombre',
		                'apellido',
		                'ci',
		                'direccion',
		                'telefono',
		                'email'

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
        return 'Reporte_Usuario' . time();
    }
}
