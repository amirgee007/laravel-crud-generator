<?php

namespace App\Repositories;

use App\Models\OrdiniDati;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdiniDatiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @method OrdiniDati findWithoutFail($id, $columns = ['*'])
 * @method OrdiniDati find($id, $columns = ['*'])
 * @method OrdiniDati first($columns = ['*'])
*/
class OrdiniDatiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dataord',
        'idut',
        'dataconsegna',
        'oraritiro',
        'ip',
        'idab',
        'stato'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrdiniDati::class;
    }
}
