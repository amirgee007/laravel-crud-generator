<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Platee
 * @package App\Models
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @property string titolo
 * @property string citta
 * @property string provincia
 */
class Platee extends Model
{
    use SoftDeletes;

    public $table = 'platee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titolo',
        'citta',
        'provincia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titolo' => 'string',
        'citta' => 'string',
        'provincia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
