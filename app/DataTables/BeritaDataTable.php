<?php

namespace App\DataTables;

use App\Models\Berita;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class BeritaDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
        ->addColumn('action', 'beritas.datatables_actions')
        ->editColumn('banner', function($query){
            return '<img src="'.$query->banner.'" width="100"/>';
        })
        ->editColumn('isi', function($query){
            return ''.$query->isi.'';
        })
        ->addColumn('kategori_id', 'beritas.tags')
        ->rawColumns(['isi','action', 'banner', 'kategori_id']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Berita $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Berita $model)
    {
        return $model->newQuery()->with('kategori', 'prodi', 'users', 'tags');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-primary btn-sm no-corner',],
                    // ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-success btn-sm no-corner', 'text'=>'<i class="fas fa-sync-alt"></i> ' . 'Refresh'],
                ],
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
            'id' => ['title' => 'No.', 'orderable' => false, 'searchable' => false, 'render' => function() {
                return 'function(data,type,fullData,meta){return meta.settings._iDisplayStart+meta.row+1;}';
            }],
            'users_id' => ['title' => 'Penulis', 'data' => 'users.name', 'name'=>'users.name'],
            'judul',
            'isi',
            'kategori_id' => ['title' => 'Kategori'],
            'banner'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'beritas_datatable_' . time();
    }
}
