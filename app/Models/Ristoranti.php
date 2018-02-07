<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ristoranti
 * @package App\Models
 * @version February 7, 2018, 6:40 pm UTC
 *
 * @property string ragionesociale
 * @property string insegna
 * @property string nomereferente
 * @property string cognomereferente
 * @property string indirizzo
 * @property string cap
 * @property string localita
 * @property string provincia
 * @property string telefono
 * @property string cellulare
 * @property string email1
 * @property string email2
 * @property string piva
 * @property string cf
 * @property integer capservito1
 * @property integer capservito2
 * @property integer capservito3
 */
class Ristoranti extends Model
{
    use SoftDeletes;

    public $table = 'ristoranti';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ragionesociale',
        'insegna',
        'nomereferente',
        'cognomereferente',
        'indirizzo',
        'cap',
        'localita',
        'provincia',
        'telefono',
        'cellulare',
        'email1',
        'email2',
        'piva',
        'cf',
        'capservito1',
        'capservito2',
        'capservito3'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ragionesociale' => 'string',
        'insegna' => 'string',
        'nomereferente' => 'string',
        'cognomereferente' => 'string',
        'indirizzo' => 'string',
        'cap' => 'string',
        'localita' => 'string',
        'provincia' => 'string',
        'telefono' => 'string',
        'cellulare' => 'string',
        'email1' => 'string',
        'email2' => 'string',
        'piva' => 'string',
        'cf' => 'string',
        'capservito1' => 'integer',
        'capservito2' => 'integer',
        'capservito3' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
