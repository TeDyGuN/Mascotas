<?php

namespace App\DataTables;

use App\Rfid;
use App\User;
use Yajra\Datatables\Services\DataTable;

class RfidDataTable extends DataTable
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
        $query = Rfid::select();

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
		                'codigo',
		                'uso'

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
        return 'rfiddatatables_' . time();
    }
	public function pdf(){

	}
}
