<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Certificate
 * @package App\Models
 * @version August 8, 2020, 3:50 pm UTC
 *
 * @property integer $user_id
 * @property integer $category_id
 * @property string $course_id
 * @property string|\Carbon\Carbon $assign_date
 * @property string $percentage
 * @property string $certificate_status
 */
class Certificate extends Model
{
    use SoftDeletes;

    public $table = 'certificates';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'category_id',
        'course_id',
        'assign_date',
        'percentage',
        'certificate_status'
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
        'course_id' => 'string',
        'assign_date' => 'datetime',
        'percentage' => 'string',
        'certificate_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'category_id' => 'required|integer',
        'course_id' => 'required|string|max:255',
        'assign_date' => 'required',
        'percentage' => 'required|string|max:255',
        'certificate_status' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
