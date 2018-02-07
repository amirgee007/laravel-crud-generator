<?php

namespace App\Repositories;

use App\Models\OrdiniProdotti;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdiniProdottiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @method OrdiniProdotti findWithoutFail($id, $columns = ['*'])
 * @method OrdiniProdotti find($id, $columns = ['*'])
 * @method OrdiniProdotti first($columns = ['*'])
*/
class OrdiniProdottiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idord',
        'idpiatto',
        'idrist',
        'qta'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrdiniProdotti::class;
    }
}
