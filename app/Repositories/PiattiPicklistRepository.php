<?php

namespace App\Repositories;

use App\Models\PiattiPicklist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PiattiPicklistRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @method PiattiPicklist findWithoutFail($id, $columns = ['*'])
 * @method PiattiPicklist find($id, $columns = ['*'])
 * @method PiattiPicklist first($columns = ['*'])
*/
class PiattiPicklistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idpick',
        'idpiatto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PiattiPicklist::class;
    }
}
