<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prodotti
 * @package App\Models
 * @version February 7, 2018, 6:40 pm UTC
 *
 * @property string codprod
 * @property string titolo
 * @property integer idplatea
 * @property integer dispgiornaliara
 * @property integer stock
 * @property decimal prezzo
 */
class Prodotti extends Model
{
    use SoftDeletes;

    public $table = 'prodotti';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codprod',
        'titolo',
        'idplatea',
        'dispgiornaliara',
        'stock',
        'prezzo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codprod' => 'string',
        'titolo' => 'string',
        'idplatea' => 'integer',
        'dispgiornaliara' => 'integer',
        'stock' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
