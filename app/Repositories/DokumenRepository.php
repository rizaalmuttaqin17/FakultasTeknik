<?php

namespace App\Repositories;

use App\Models\Dokumen;
use App\Repositories\BaseRepository;

/**
 * Class DokumenRepository
 * @package App\Repositories
 * @version October 24, 2022, 6:21 am UTC
*/

class DokumenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'file',
        'keterangan',
        'prodi_id'
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
        return Dokumen::class;
    }
}
