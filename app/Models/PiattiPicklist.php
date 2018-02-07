<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PiattiPicklist
 * @package App\Models
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @property integer idpick
 * @property integer idpiatto
 */
class PiattiPicklist extends Model
{
    use SoftDeletes;

    public $table = 'piatti_picklist';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idpick',
        'idpiatto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idpick' => 'integer',
        'idpiatto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
