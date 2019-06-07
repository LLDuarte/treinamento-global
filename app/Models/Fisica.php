<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fisica
 * @package App\Models
 * @version June 7, 2019, 11:44 pm UTC
 *
 * @property \App\Models\Endereco endereco
 * @property integer endereco_id
 * @property string nome
 * @property string data_nascimento
 * @property string cpf
 * @property string email
 * @property string telefone
 */
class Fisica extends Model
{
    use SoftDeletes;

    public $table = 'fisicas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'endereco_id',
        'nome',
        'data_nascimento',
        'cpf',
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
        'nome' => 'string',
        'data_nascimento' => 'date',
        'cpf' => 'string',
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
