<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Enrollment
 * @package App\Models
 * @version August 19, 2020, 11:21 pm UTC
 *
 * @property string $name
 * @property string $course_name
 */
class Enrollment extends Model
{
    use SoftDeletes;

    public $table = 'enrollments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'course_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'course_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'course_name' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function enrollments(){
        return $this->hasMany('App\Models\User');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }
}
