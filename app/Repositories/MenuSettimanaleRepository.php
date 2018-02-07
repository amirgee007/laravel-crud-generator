<?php

namespace App\Repositories;

use App\Models\MenuSettimanale;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MenuSettimanaleRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @method MenuSettimanale findWithoutFail($id, $columns = ['*'])
 * @method MenuSettimanale find($id, $columns = ['*'])
 * @method MenuSettimanale first($columns = ['*'])
*/
class MenuSettimanaleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idpiatto',
        'idrist',
        'giorno_settimana',
        'datamenu'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MenuSettimanale::class;
    }
}
