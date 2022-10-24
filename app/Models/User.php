<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package App\Models
 * @version August 16, 2022, 6:14 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string $password
 */
class User extends Authenticatable
{
    use SoftDeletes;
    use HasRoles;
    use HasFactory;

    public $table = 'users';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'agama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'telepon',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'photo' => 'string',
        'agama' => 'string',
        'jenis_kelamin' => 'string',
        'tempat_lahir' => 'string',
        'tanggal_lahir' => 'date',
        'telepon' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        // 'password' => 'required'
    ];

    
}
