<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MenuRistorante
 * @package App\Models
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @property integer idrist
 * @property integer idpiatto
 * @property integer approvato
 * @property integer disp_in_menu_set
 */
class MenuRistorante extends Model
{
    use SoftDeletes;

    public $table = 'menu_ristorante';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idrist',
        'idpiatto',
        'approvato',
        'disp_in_menu_set'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idrist' => 'integer',
        'idpiatto' => 'integer',
        'approvato' => 'integer',
        'disp_in_menu_set' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
