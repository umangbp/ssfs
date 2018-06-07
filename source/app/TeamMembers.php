<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMembers extends Model
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

     protected $table = 'team_members';


     public function getImageAttribute($value){

        if(isset($value)){
            return url('/front/uploads/team/'.$value);
        }
        else{
            return url('/front/uploads/team/default.png');
        }
     }

}
