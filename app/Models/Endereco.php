<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Endereco
 * @package App\Models
 * @version June 7, 2019, 11:43 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection fisicas
 * @property \Illuminate\Database\Eloquent\Collection juridicas
 * @property string logradouro
 * @property integer numero
 * @property string complemento
 * @property integer cep
 * @property string bairro
 * @property string municipio
 * @property string uf
 */
class Endereco extends Model
{
    use SoftDeletes;

    public $table = 'enderecos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'bairro',
        'municipio',
        'uf'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logradouro' => 'string',
        'numero' => 'integer',
        'complemento' => 'string',
        'cep' => 'integer',
        'bairro' => 'string',
        'municipio' => 'string',
        'uf' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function fisicas()
    {
        return $this->hasMany(\App\Models\Fisica::class, 'endereco_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function juridicas()
    {
        return $this->hasMany(\App\Models\Juridica::class, 'endereco_id');
    }
}
