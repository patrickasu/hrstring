<?php

namespace App\Repositories;

use App\Models\Enrollment;
use App\Repositories\BaseRepository;

/**
 * Class EnrollmentRepository
 * @package App\Repositories
 * @version August 19, 2020, 11:21 pm UTC
*/

class EnrollmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'course_name'
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
        return Enrollment::class;
    }
}
