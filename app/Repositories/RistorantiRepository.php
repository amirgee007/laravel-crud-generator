<?php

namespace App\Repositories;

use App\Models\Ristoranti;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RistorantiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:40 pm UTC
 *
 * @method Ristoranti findWithoutFail($id, $columns = ['*'])
 * @method Ristoranti find($id, $columns = ['*'])
 * @method Ristoranti first($columns = ['*'])
*/
class RistorantiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ragionesociale',
        'insegna',
        'nomereferente',
        'cognomereferente',
        'indirizzo',
        'cap',
        'localita',
        'provincia',
        'telefono',
        'cellulare',
        'email1',
        'email2',
        'piva',
        'cf',
        'capservito1',
        'capservito2',
        'capservito3'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ristoranti::class;
    }
}
