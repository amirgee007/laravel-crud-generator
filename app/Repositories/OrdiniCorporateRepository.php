<?php

namespace App\Repositories;

use App\Models\OrdiniCorporate;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdiniCorporateRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @method OrdiniCorporate findWithoutFail($id, $columns = ['*'])
 * @method OrdiniCorporate find($id, $columns = ['*'])
 * @method OrdiniCorporate first($columns = ['*'])
*/
class OrdiniCorporateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcorporate',
        'cod_abb',
        'num_abb',
        'scadenza'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrdiniCorporate::class;
    }
}
