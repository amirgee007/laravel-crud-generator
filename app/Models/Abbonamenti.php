<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Abbonamenti
 * @package App\Models
 * @version February 7, 2018, 5:49 pm UTC
 *
 * @property integer idut
 * @property integer idab
 * @property date scadenza
 * @property integer idcorporate
 */
class Abbonamenti extends Model
{
    use SoftDeletes;

    public $table = 'abbonamenti';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idut',
        'idab',
        'scadenza',
        'idcorporate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idut' => 'integer',
        'idab' => 'integer',
        'scadenza' => 'date',
        'idcorporate' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
