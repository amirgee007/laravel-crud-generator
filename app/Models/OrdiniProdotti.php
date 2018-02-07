<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrdiniProdotti
 * @package App\Models
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @property integer idord
 * @property integer idpiatto
 * @property integer idrist
 * @property integer qta
 */
class OrdiniProdotti extends Model
{
    use SoftDeletes;

    public $table = 'ordini_prodotti';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idord',
        'idpiatto',
        'idrist',
        'qta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idord' => 'integer',
        'idpiatto' => 'integer',
        'idrist' => 'integer',
        'qta' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
