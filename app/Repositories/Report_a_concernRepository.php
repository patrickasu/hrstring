<?php

namespace App\Repositories;

use App\Models\Report_a_concern;
use App\Repositories\BaseRepository;

/**
 * Class Report_a_concernRepository
 * @package App\Repositories
 * @version August 8, 2020, 3:55 pm UTC
*/

class Report_a_concernRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject',
        'message'
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
        return Report_a_concern::class;
    }
}
