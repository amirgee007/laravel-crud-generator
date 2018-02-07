<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PreferenzeUtPiatti
 * @package App\Models
 * @version February 7, 2018, 6:40 pm UTC
 *
 * @property integer idut
 * @property integer idpiatto
 * @property integer piace
 * @property integer idord
 * @property string tipoazione
 */
class PreferenzeUtPiatti extends Model
{
    use SoftDeletes;

    public $table = 'preferenze_ut_piatti';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idut',
        'idpiatto',
        'piace',
        'idord',
        'tipoazione'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idut' => 'integer',
        'idpiatto' => 'integer',
        'piace' => 'integer',
        'idord' => 'integer',
        'tipoazione' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
