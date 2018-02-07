<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MenuSettimanale
 * @package App\Models
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @property integer idpiatto
 * @property integer idrist
 * @property string giorno_settimana
 * @property date datamenu
 */
class MenuSettimanale extends Model
{
    use SoftDeletes;

    public $table = 'menu_settimanale';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idpiatto',
        'idrist',
        'giorno_settimana',
        'datamenu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idpiatto' => 'integer',
        'idrist' => 'integer',
        'giorno_settimana' => 'string',
        'datamenu' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
