<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gallery
 * @package App\Models
 * @version November 7, 2022, 11:37 pm UTC
 *
 * @property \App\Models\User $user
 * @property string $judul
 * @property string $foto
 * @property string $keterangan
 * @property integer $user_id
 */
class Gallery extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'gallery';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'foto',
        'keterangan',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'judul' => 'string',
        'foto' => 'string',
        'keterangan' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'nullable|string|max:45',
        'foto' => 'nullable|string',
        'keterangan' => 'nullable|string|max:145',
        'user_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
