<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Juridica
 * @package App\Models
 * @version June 7, 2019, 11:44 pm UTC
 *
 * @property \App\Models\Endereco endereco
 * @property integer endereco_id
 * @property string nome_fantasia
 * @property string razao_social
 * @property string data_abertura
 * @property string cnpj
 * @property string email
 * @property string telefone
 */
class Juridica extends Model
{
    use SoftDeletes;

    public $table = 'juridicas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'endereco_id',
        'nome_fantasia',
        'razao_social',
        'data_abertura',
        'cnpj',
        'email',
        'telefone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'endereco_id' => 'integer',
        'nome_fantasia' => 'string',
        'razao_social' => 'string',
        'data_abertura' => 'date',
        'cnpj' => 'string',
        'email' => 'string',
        'telefone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'endereco_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function endereco()
    {
        return $this->belongsTo(\App\Models\Endereco::class, 'endereco_id', 'id');
    }
}
