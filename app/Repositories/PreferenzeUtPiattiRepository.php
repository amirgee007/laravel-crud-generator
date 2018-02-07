<?php

namespace App\Repositories;

use App\Models\PreferenzeUtPiatti;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreferenzeUtPiattiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:40 pm UTC
 *
 * @method PreferenzeUtPiatti findWithoutFail($id, $columns = ['*'])
 * @method PreferenzeUtPiatti find($id, $columns = ['*'])
 * @method PreferenzeUtPiatti first($columns = ['*'])
*/
class PreferenzeUtPiattiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idut',
        'idpiatto',
        'piace',
        'idord',
        'tipoazione'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PreferenzeUtPiatti::class;
    }
}
