<?php

namespace App\Repositories;

use App\Models\Prodotti;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProdottiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:40 pm UTC
 *
 * @method Prodotti findWithoutFail($id, $columns = ['*'])
 * @method Prodotti find($id, $columns = ['*'])
 * @method Prodotti first($columns = ['*'])
*/
class ProdottiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codprod',
        'titolo',
        'idplatea',
        'dispgiornaliara',
        'stock',
        'prezzo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prodotti::class;
    }
}
