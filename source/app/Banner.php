<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    
    use SoftDeletes;

	protected $dates = ['deleted_at'];    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        
    ];

     protected $table = 'banner';
}
