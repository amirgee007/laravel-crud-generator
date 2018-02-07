<?php

namespace App\Repositories;

use App\Models\Distanze;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DistanzeRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:41 pm UTC
 *
 * @method Distanze findWithoutFail($id, $columns = ['*'])
 * @method Distanze find($id, $columns = ['*'])
 * @method Distanze first($columns = ['*'])
*/
class DistanzeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user',
        'pass',
        'attivo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Distanze::class;
    }
}
