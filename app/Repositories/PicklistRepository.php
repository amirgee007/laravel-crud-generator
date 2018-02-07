<?php

namespace App\Repositories;

use App\Models\Picklist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PicklistRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @method Picklist findWithoutFail($id, $columns = ['*'])
 * @method Picklist find($id, $columns = ['*'])
 * @method Picklist first($columns = ['*'])
*/
class PicklistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titolo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Picklist::class;
    }
}
