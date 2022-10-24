<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BeritaTags
 * @package App\Models
 * @version October 19, 2022, 6:55 am UTC
 *
 * @property integer $berita_id
 * @property integer $tags_id
 */
class BeritaTags extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'berita_tag';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'berita_id',
        'tag_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'berita_id' => 'integer',
        'tag_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'berita_id' => 'nullable',
        'tag_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function tags()
    {
        return $this->belongsTo(\App\Models\Tag::class, 'tag_id');
    }
}
