<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Carbon\Carbon;

class UserDataTable extends DataTable
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
        ->addColumn('action', 'users.datatables_actions')
        ->editColumn('name', function($query){
            return '<p>'.$query['name'].'</p><span>'.$query['telepon'].'</span>';
        })
        ->editColumn('photo', function($query){
            return '<img src="'.$query->photo.'" width="50"/>';
        })
        ->editColumn('tempat_lahir', function($query){
            if($query['tempat_lahir']==null){
                return '-';
            } else {
                return '<p>'.$query['tempat_lahir'].', '.Carbon::parse($query['tanggal_lahir'])->locale('id')->isoFormat('DD MMMM Y').'</p>';
            }
        })
        ->editColumn('jenis_kelamin', function($query){
            if($query['jenis_kelamin']=='L'){
                return 'Laki- Laki';
            } else {
                return 'Perempuan';
            }
        })
        ->rawColumns(['photo','action', 'tempat_lahir', 'jenis_kelamin', 'name']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
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
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'name',
            'email',
            'agama',
            'jenis_kelamin',
            'tempat_lahir',
            'alamat',
            'photo',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'users_datatable_' . time();
    }
}
