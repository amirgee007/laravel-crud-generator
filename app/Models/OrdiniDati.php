<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrdiniDati
 * @package App\Models
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @property string|\Carbon\Carbon dataord
 * @property integer idut
 * @property date dataconsegna
 * @property string oraritiro
 * @property string ip
 * @property integer idab
 * @property string stato
 */
class OrdiniDati extends Model
{
    use SoftDeletes;

    public $table = 'ordini_dati';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'dataord',
        'idut',
        'dataconsegna',
        'oraritiro',
        'ip',
        'idab',
        'stato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idut' => 'integer',
        'dataconsegna' => 'date',
        'oraritiro' => 'string',
        'ip' => 'string',
        'idab' => 'integer',
        'stato' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
