<?php

namespace App\Repositories;

use App\Models\Abbonamenti;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AbbonamentiRepository
 * @package App\Repositories
 * @version February 7, 2018, 5:49 pm UTC
 *
 * @method Abbonamenti findWithoutFail($id, $columns = ['*'])
 * @method Abbonamenti find($id, $columns = ['*'])
 * @method Abbonamenti first($columns = ['*'])
*/
class AbbonamentiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idut',
        'idab',
        'scadenza',
        'idcorporate'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Abbonamenti::class;
    }
}
