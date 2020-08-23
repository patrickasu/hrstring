<?php

namespace App\Repositories;

use App\Models\CourseUser;
use App\Repositories\BaseRepository;

/**
 * Class CourseUserRepository
 * @package App\Repositories
 * @version August 21, 2020, 9:46 am UTC
*/

class CourseUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'category_id',
        'course_name',
        'introduction',
        'description',
        'assign_date',
        'expire_date',
        'course_url1',
        'course_url2',
        'course_url3',
        'course_url4',
        'course_url5',
        'exam_url',
        'resources',
        'paid_amount',
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
        return CourseUser::class;
    }
}
