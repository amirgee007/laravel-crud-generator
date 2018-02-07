<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Distanze
 * @package App\Models
 * @version February 7, 2018, 6:41 pm UTC
 *
 * @property string user
 * @property string pass
 * @property integer attivo
 */
class Distanze extends Model
{
    use SoftDeletes;

    public $table = 'utenti_login';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user',
        'pass',
        'attivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user' => 'string',
        'pass' => 'string',
        'attivo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
