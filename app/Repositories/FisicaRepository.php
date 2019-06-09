<?php

namespace App\Repositories;

use App\Models\Fisica;
use App\Repositories\BaseRepository;

/**
 * Class FisicaRepository
 * @package App\Repositories
 * @version June 7, 2019, 11:44 pm UTC
*/

class FisicaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'endereco_id',
        'nome',
        'data_nascimento',
        'cpf',
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
        return Fisica::class;
    }
}
