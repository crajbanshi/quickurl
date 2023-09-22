<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AccessCount extends Model 
{
    protected $table = 'mircourl_access_count_tbl';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identity', 'count'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [        
    ];
}
