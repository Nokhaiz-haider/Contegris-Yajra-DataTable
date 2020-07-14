<?php

namespace App\DataTables;

use App\DataTables\ExportDataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\Datatables\Datatables;
use App\Export;

class ExportDataTable extends DataTables
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'exportdatatable.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\ExportDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ExportDataTable $model)
    {
        $data = Export::select();
        return $this->applyScopes($data);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('exportdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('export'),
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('cust_first_name'),
            Column::make('cust_last_name'),
            Column::make('cust_email'),
            Column::make('cust_tel_no'),
            Column::make('cust_address'),
            Column::make('cust_city'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Export_' . date('YmdHis');
    }
}
