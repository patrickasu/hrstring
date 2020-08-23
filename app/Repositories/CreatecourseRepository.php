<?php

namespace App\Repositories;

use App\Models\Createcourse;
use App\Repositories\BaseRepository;

/**
 * Class CreatecourseRepository
 * @package App\Repositories
 * @version August 22, 2020, 6:37 pm UTC
*/

class CreatecourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_name',
        'category_id',
        'introduction',
        'description',
        'course_url1',
        'course_url2',
        'course_url3',
        'course_url4',
        'course_url5',
        'exam_url',
        'resources'
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
        return Createcourse::class;
    }
}
