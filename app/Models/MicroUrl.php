<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MicroUrl extends Model 
{
    protected $table = 'mircourl_url_tbl';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identity', 'url'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [        
    ];
}
