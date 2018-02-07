<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrdiniCorporate
 * @package App\Models
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @property integer idcorporate
 * @property string cod_abb
 * @property integer num_abb
 * @property string|\Carbon\Carbon scadenza
 */
class OrdiniCorporate extends Model
{
    use SoftDeletes;

    public $table = 'ordini_corporate';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idcorporate',
        'cod_abb',
        'num_abb',
        'scadenza'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcorporate' => 'integer',
        'cod_abb' => 'string',
        'num_abb' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
