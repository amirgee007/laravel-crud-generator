<?php

namespace App\Repositories;

use App\Models\OrdiniDatiEvasiMarco;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdiniDatiEvasiMarcoRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @method OrdiniDatiEvasiMarco findWithoutFail($id, $columns = ['*'])
 * @method OrdiniDatiEvasiMarco find($id, $columns = ['*'])
 * @method OrdiniDatiEvasiMarco first($columns = ['*'])
*/
class OrdiniDatiEvasiMarcoRepository extends BaseRepository
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
        'stato',
        'idpiatto',
        'idrist',
        'qta'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrdiniDatiEvasiMarco::class;
    }
}
