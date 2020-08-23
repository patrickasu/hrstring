<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CourseUser
 * @package App\Models
 * @versio * @version August 21, 2020, 9:43 am UTC
 *
 * @property integer $user_id
 * @property integer $category_id
 * @property string $course_name
 * @property string $introduction
 * @property string $description
 * @property string|\Carbon\Carbon $assign_date
 * @property string|\Carbon\Carbon $expire_date
 * @property string $course_url1
 * @property string $course_url2
 * @property string $course_url3
 * @property string $course_url4
 * @property string $course_url5
 * @property string $exam_url
 * @property string $resources
 * @property number $paid_amount
 * @property boolean $status
 */
class CourseUser extends Model
{
    use SoftDeletes;

    public $table = 'course_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'course_name' => 'string',
        'introduction' => 'string',
        'description' => 'string',
        'assign_date' => 'datetime',
        'expire_date' => 'datetime',
        'course_url1' => 'string',
        'course_url2' => 'string',
        'course_url3' => 'string',
        'course_url4' => 'string',
        'course_url5' => 'string',
        'exam_url' => 'string',
        'resources' => 'string',
        'paid_amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'nullable|integer',
        'category_id' => 'nullable|integer',
        'course_name' => 'nullable|string|max:255',
        'introduction' => 'required|string|max:255',
        'description' => 'nullable|string',
        'assign_date' => 'nullable',
        'expire_date' => 'nullable',
        'course_url1' => 'nullable|string|max:255',
        'course_url2' => 'nullable|string|max:255',
        'course_url3' => 'nullable|string|max:255',
        'course_url4' => 'nullable|string|max:255',
        'course_url5' => 'nullable|string|max:255',
        'exam_url' => 'nullable|string|max:255',
        'resources' => 'nullable|string',
        'paid_amount' => 'nullable|numeric',
        'status' => 'nullable|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

}