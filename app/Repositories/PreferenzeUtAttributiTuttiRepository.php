<?php

namespace App\Repositories;

use App\Models\PreferenzeUtAttributiTutti;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreferenzeUtAttributiTuttiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:40 pm UTC
 *
 * @method PreferenzeUtAttributiTutti findWithoutFail($id, $columns = ['*'])
 * @method PreferenzeUtAttributiTutti find($id, $columns = ['*'])
 * @method PreferenzeUtAttributiTutti first($columns = ['*'])
*/
class PreferenzeUtAttributiTuttiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idut',
        'idatt',
        'datains',
        'piace',
        'idord',
        'nascondi'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PreferenzeUtAttributiTutti::class;
    }
}
