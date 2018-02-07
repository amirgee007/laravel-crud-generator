<?php

namespace App\Repositories;

use App\Models\OrdiniProdottiEvasi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdiniProdottiEvasiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @method OrdiniProdottiEvasi findWithoutFail($id, $columns = ['*'])
 * @method OrdiniProdottiEvasi find($id, $columns = ['*'])
 * @method OrdiniProdottiEvasi first($columns = ['*'])
*/
class OrdiniProdottiEvasiRepository extends BaseRepository
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
        return OrdiniProdottiEvasi::class;
    }
}
