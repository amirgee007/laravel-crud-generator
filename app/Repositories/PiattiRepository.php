<?php

namespace App\Repositories;

use App\Models\Piatti;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PiattiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @method Piatti findWithoutFail($id, $columns = ['*'])
 * @method Piatti find($id, $columns = ['*'])
 * @method Piatti first($columns = ['*'])
*/
class PiattiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titolo',
        'descrizione',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Piatti::class;
    }
}
