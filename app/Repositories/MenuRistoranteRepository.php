<?php

namespace App\Repositories;

use App\Models\MenuRistorante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MenuRistoranteRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:38 pm UTC
 *
 * @method MenuRistorante findWithoutFail($id, $columns = ['*'])
 * @method MenuRistorante find($id, $columns = ['*'])
 * @method MenuRistorante first($columns = ['*'])
*/
class MenuRistoranteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idrist',
        'idpiatto',
        'approvato',
        'disp_in_menu_set'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MenuRistorante::class;
    }
}
