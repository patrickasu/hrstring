<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Createcourse
 * @package App\Models
 * @version August 22, 2020, 6:37 pm UTC
 *
 * @property string $course_name
 * @property integer $category_id
 * @property string $introduction
 * @property string $description
 * @property string $course_url1
 * @property string $course_url2
 * @property string $course_url3
 * @property string $course_url4
 * @property string $course_url5
 * @property string $exam_url
 * @property string $resources
 */
class Createcourse extends Model
{
    use SoftDeletes;

    public $table = 'createcourses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_name' => 'string',
        'category_id' => 'integer',
        'introduction' => 'string',
        'description' => 'string',
        'course_url1' => 'string',
        'course_url2' => 'string',
        'course_url3' => 'string',
        'course_url4' => 'string',
        'course_url5' => 'string',
        'exam_url' => 'string',
        'resources' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'nullable|string|max:255',
        'category_id' => 'nullable|integer',
        'introduction' => 'required|string|max:255',
        'description' => 'nullable|string',
        'course_url1' => 'nullable|string|max:255',
        'course_url2' => 'nullable|string|max:255',
        'course_url3' => 'nullable|string|max:255',
        'course_url4' => 'nullable|string|max:255',
        'course_url5' => 'nullable|string|max:255',
        'exam_url' => 'nullable|string|max:255',
        'resources' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }
}
