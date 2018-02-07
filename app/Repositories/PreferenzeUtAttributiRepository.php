<?php

namespace App\Repositories;

use App\Models\PreferenzeUtAttributi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreferenzeUtAttributiRepository
 * @package App\Repositories
 * @version February 7, 2018, 6:39 pm UTC
 *
 * @method PreferenzeUtAttributi findWithoutFail($id, $columns = ['*'])
 * @method PreferenzeUtAttributi find($id, $columns = ['*'])
 * @method PreferenzeUtAttributi first($columns = ['*'])
*/
class PreferenzeUtAttributiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idut',
        'idatt',
        'datains'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PreferenzeUtAttributi::class;
    }
}
