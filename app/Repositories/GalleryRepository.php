<?php

namespace App\Repositories;

use App\Models\Gallery;
use App\Repositories\BaseRepository;

/**
 * Class GalleryRepository
 * @package App\Repositories
 * @version November 7, 2022, 11:37 pm UTC
*/

class GalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'foto',
        'keterangan',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Gallery::class;
    }
}
