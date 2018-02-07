<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Piatti
 * @package App\Models
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @property string titolo
 * @property string descrizione
 * @property string foto1
 * @property string foto2
 * @property string foto3
 * @property string foto4
 * @property string foto5
 */
class Piatti extends Model
{
    use SoftDeletes;

    public $table = 'piatti';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titolo',
        'descrizione',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titolo' => 'string',
        'descrizione' => 'string',
        'foto1' => 'string',
        'foto2' => 'string',
        'foto3' => 'string',
        'foto4' => 'string',
        'foto5' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
