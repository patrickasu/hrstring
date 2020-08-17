<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course_progress
 * @package App\Models
 * @version August 8, 2020, 3:51 pm UTC
 *
 * @property integer $user_id
 * @property integer $category_id
 * @property integer $course_id
 * @property string|\Carbon\Carbon $assign_date
 * @property string|\Carbon\Carbon $start_date
 * @property string|\Carbon\Carbon $completed_date
 * @property string $status
 */
class Course_progress extends Model
{
    use SoftDeletes;

    public $table = 'course_progress';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'category_id',
        'course_id',
        'assign_date',
        'start_date',
        'completed_date',
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
        'course_id' => 'integer',
        'assign_date' => 'datetime',
        'start_date' => 'datetime',
        'completed_date' => 'datetime',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'category_id' => 'required|integer',
        'course_id' => 'required|integer',
        'assign_date' => 'required',
        'start_date' => 'required',
        'completed_date' => 'required',
        'status' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
