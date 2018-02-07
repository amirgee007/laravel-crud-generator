<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PreferenzeUtAttributi
 * @package App\Models
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @property integer idut
 * @property integer idatt
 * @property string|\Carbon\Carbon datains
 */
class PreferenzeUtAttributi extends Model
{
    use SoftDeletes;

    public $table = 'preferenze_ut_attributi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idut',
        'idatt',
        'datains'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idut' => 'integer',
        'idatt' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
