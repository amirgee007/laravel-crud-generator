<?php

namespace App\Repositories;

use App\Models\OrdiniDatiEvasi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdiniDatiEvasiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @method OrdiniDatiEvasi findWithoutFail($id, $columns = ['*'])
 * @method OrdiniDatiEvasi find($id, $columns = ['*'])
 * @method OrdiniDatiEvasi first($columns = ['*'])
*/
class OrdiniDatiEvasiRepository extends BaseRepository
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
        return OrdiniDatiEvasi::class;
    }
}
