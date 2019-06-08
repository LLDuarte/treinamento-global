<?php

namespace App\DataTables;

use App\Models\Endereco;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EnderecoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'enderecos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Endereco $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Endereco $model)
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
            ->addAction(['width' => '120px'])
            ->parameters([
                'language' => [ 'paginate' => ['next' => 'Próxima &raquo;', 'previous' => '&laquo; Anterior'],
                                'buttons' => ['pageLength' => ['_' => '<i class="fa fa-sort datatable-icons"></i> %d registros por página']],
                                'search' => 'Pesquisar: ',
                                'emptyTable' => 'Não há registros nessa tabela',
                                'info' => 'Mostrando de _START_ até _END_ de _TOTAL_ registros',
                                'infoEmpty' => 'Mostrando 0 até 0 de 0 registros',
                                'infoFiltered' => '(filtrados de _MAX_ registros)',
                                'loadingRecords' => 'Carregando...',
                                'processing' => 'Processando...',
                                'zeroRecords' => 'Nenhum registro encontrado'],
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'pageLength' => 50,
                'scrollX' => true,
                'buttons' => [
                    [
                        'extend'  => 'print',
                        'text'    => '<i class="fa fa-print datatable-icons"></i> ' . 'Imprimir'
                        
                    ],
                    [
                        'extend'  => 'reload',
                        'text'    => '<i class="fa fa-refresh datatable-icons"></i> ' . 'Recarregar'
                    ],
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download datatable-icons"></i> ' . 'Exportar',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    [   
                        'extend'  => 'colvis',
                        'text'    => '<i class="fa fa-columns datatable-icons"></i> ' . 'Colunas visíveis'
                    ],
                    'pageLength'
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
            'logradouro'    =>  ['title' => 'Logradouro'],
            'numero'        =>  ['title' => 'Número'],
            'complemento'   =>  ['title' => 'Complemento'],
            'cep'           =>  ['title' => 'CEP'],
            'bairro'        =>  ['title' => 'Bairro'],
            'municipio'     =>  ['title' => 'Município'],
            'uf'            =>  ['title' => 'UF']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'enderecosdatatable_' . time();
    }
}
