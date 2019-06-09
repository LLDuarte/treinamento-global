<?php

namespace App\Repositories;

use App\Models\Endereco;
use App\Repositories\BaseRepository;

/**
 * Class EnderecoRepository
 * @package App\Repositories
 * @version June 7, 2019, 11:43 pm UTC
*/

class EnderecoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'bairro',
        'municipio',
        'uf'
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
        return Endereco::class;
    }
}
