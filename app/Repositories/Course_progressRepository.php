<?php

namespace App\Repositories;

use App\Models\Course_progress;
use App\Repositories\BaseRepository;

/**
 * Class Course_progressRepository
 * @package App\Repositories
 * @version August 8, 2020, 3:51 pm UTC
*/

class Course_progressRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'category_id',
        'course_id',
        'assign_date',
        'start_date',
        'completed_date',
        'status'
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
        return Course_progress::class;
    }
}
