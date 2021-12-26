<?php

namespace App\DataTables;

use App\Models\name;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class nameDataTable extends DataTable
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
            ->addColumn('action', '<a href="delete/{{$id}}" > delete</a> <a href="delete/{{$id}}" > update</a>');

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\name $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(name $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('name-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            -> orderBy(1)
            ->lengthMenu(
                [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
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
            'name',
            'action',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'name_' . date('YmdHis');
    }
}
