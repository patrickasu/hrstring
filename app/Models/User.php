<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version August 8, 2020, 3:58 pm UTC
 *
 * @property string $name
 * @property string $date_enroll
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property integer $role_id
 * @property string $remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'date_enroll',
        'email',
        'email_verified_at',
        'password',
        'role_id',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'date_enroll' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'role_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'date_enroll' => 'nullable|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'role_id' => 'nullable|integer',
        'remember_token' => 'nullable|string|max:100',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

    // public function courses()
    // {
    //     return $this->belongsToMany('App\Models\Course');
    // }
}
