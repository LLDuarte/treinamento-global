<?php

namespace App\Repositories;

use App\Models\Juridica;
use App\Repositories\BaseRepository;

/**
 * Class JuridicaRepository
 * @package App\Repositories
 * @version June 7, 2019, 11:44 pm UTC
*/

class JuridicaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'endereco_id',
        'nome_fantasia',
        'razao_social',
        'data_abertura',
        'cnpj',
        'email',
        'telefone'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Juridica::class;
    }
}
