<?php

namespace App\Repositories;

use App\Models\BeritaTags;
use App\Repositories\BaseRepository;

/**
 * Class BeritaTagsRepository
 * @package App\Repositories
 * @version October 19, 2022, 6:55 am UTC
*/

class BeritaTagsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'berita_id',
        'tag_id'
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
        return BeritaTags::class;
    }
}
