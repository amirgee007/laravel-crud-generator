<?php

namespace App\Repositories;

use App\Models\Platee;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlateeRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @method Platee findWithoutFail($id, $columns = ['*'])
 * @method Platee find($id, $columns = ['*'])
 * @method Platee first($columns = ['*'])
*/
class PlateeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titolo',
        'citta',
        'provincia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Platee::class;
    }
}
