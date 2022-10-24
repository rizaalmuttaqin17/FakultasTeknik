<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dokumen
 * @package App\Models
 * @version October 24, 2022, 6:21 am UTC
 *
 * @property \App\Models\ProgramStudi $prodi
 * @property string $judul
 * @property string $file
 * @property string $keterangan
 * @property integer $prodi_id
 */
class Dokumen extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dokumen';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'file',
        'keterangan',
        'prodi_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'judul' => 'string',
        // 'file' => 'string',
        'keterangan' => 'string',
        'prodi_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'nullable|string|max:45',
        // 'file' => 'nullable|string',
        'keterangan' => 'nullable|string',
        'prodi_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function prodi()
    {
        return $this->belongsTo(\App\Models\ProgramStudi::class, 'prodi_id');
    }
}
