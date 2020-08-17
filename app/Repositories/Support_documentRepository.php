<?php

namespace App\Repositories;

use App\Models\Support_document;
use App\Repositories\BaseRepository;

/**
 * Class Support_documentRepository
 * @package App\Repositories
 * @version August 8, 2020, 2:36 pm UTC
*/

class Support_documentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_name',
        'url'
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
        return Support_document::class;
    }
}
